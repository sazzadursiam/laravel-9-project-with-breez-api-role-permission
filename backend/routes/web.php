<?php

use App\Http\Controllers\DashboardRedirectController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [DashboardRedirectController::class, 'redirect']);

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__ . '/auth.php';