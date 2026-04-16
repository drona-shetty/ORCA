<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event\Registeration;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Log;

class CSVController extends Controller
{
    public function download($gcns): StreamedResponse
    {
        $filename = sprintf('registerUsers_%s_%s.csv', $gcns, date('Y-m-d'));
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        // Fetch latest first
        $userData = Registeration::where('gcns', $gcns)
            ->orderBy('created_at', 'desc') // change to 'id' if you don't have created_at
            ->get();

        $data = [];

        foreach ($userData as $user) {
            // Safely decode schedule_id
            $schedules = null;
            if (!empty($user->schedule_id)) {
                $schedules = json_decode($user->schedule_id, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    Log::warning("Invalid JSON in schedule_id for registration id {$user->id}", [
                        'schedule_id' => $user->schedule_id,
                        'json_error'  => json_last_error_msg()
                    ]);
                    $schedules = null;
                }
            }

            if (is_array($schedules) && !empty($schedules)) {
                $schedule = 'Session ' . implode(', ', $schedules);
            } else {
                $schedule = 'Session -';
            }

            $data[] = [
                'Name'         => trim($user->fname . ' ' . $user->lname),
                'Email'        => $user->email,
                'Mobilenumber' => $user->phonenumber,
                'Occupation'   => $user->occupation,
                'Organization' => $user->organization,
                'Schedule'     => $schedule,
            ];
        }

        $callback = function () use ($data) {
            $handle = fopen('php://output', 'w');

            if (empty($data)) {
                // If no rows, still write header so file isn't empty
                fputcsv($handle, ['Name', 'Email', 'Mobilenumber', 'Occupation', 'Organization', 'Schedule']);
            } else {
                fputcsv($handle, array_keys($data[0]));
                foreach ($data as $row) {
                    fputcsv($handle, array_values($row));
                }
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }
}
