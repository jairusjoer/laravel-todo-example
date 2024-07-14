<?php

use App\Models\Todo;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::call(function () {
    DB::table('todos')
        ->where('done', 1)
        ->where('created_at', '<', now()->subDays(7))
        ->delete();
})->daily();
