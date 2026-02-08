<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class ClearLog extends Command
{
    protected $signature = 'log:clear';
    protected $description = 'Clear the Laravel log file';

    public function handle()
    {
        $logFile = storage_path('logs/laravel.log');

        if (file_exists($logFile)) {
            file_put_contents($logFile, '');
            $this->info('Logs have been cleared!');
        } else {
            $this->info('Log file does not exist.');
        }
    }
}

