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

    Route::get('/dashboard/accounting', function () {
        return Inertia::render('Dash/Accounting');
    })->name('dashboard.accounting');

    Route::get('/dashboard/contacts', function () {
        return Inertia::render('Dash/Contacts');
    })->name('dashboard.contacts');
});
