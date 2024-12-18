<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

class ScheduleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Schedule $schedule): void
    {
        // Jadwalkan command send:whatsapp-messages
        // $schedule->command('send:whatsapp-messages')->yearlyOn(1, 0, 0); // Tanggal 1 Januari, pukul 00:00
        $schedule->command('send:whatsapp-messages')->yearlyOn(1, 1, '00:00');

    }
}
