<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

// ✅ Add this:
use App\Console\Commands\ClearLog;

class Kernel extends ConsoleKernel
{
    /**
     * Register custom Artisan commands.
     *
     * @var array
     */
    protected $commands = [
        ClearLog::class, // ✅ Register the log clearing command
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('log:clear')->cron('0 */6 * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

