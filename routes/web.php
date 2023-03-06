<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/dashboard/business', function () {
        return Inertia::render('Dash/Business');
    })->name('dashboard.business');

    Route::get('/dashboard/employees', function () {
        return Inertia::render('Dash/Employees');
    })->name('dashboard.employees');

    Route::get('/dashboard/accounting', function () {
        return Inertia::render('Dash/Accounting');
    })->name('dashboard.accounting');

    Route::get('/dashboard/banking', function () {
        return Inertia::render('Dash/Banking');
    })->name('dashboard.banking');

    Route::get('/dashboard/clients', function () {
        return Inertia::render('Dash/Clients');
    })->name('dashboard.clients');

    Route::get('/dashboard/tax', function () {
        return Inertia::render('Dash/Tax');
    })->name('dashboard.tax');

    Route::get('/dashboard/reports', function () {
        return Inertia::render('Dash/Reports');
    })->name('dashboard.reports');

});

