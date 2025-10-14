<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Redirect root to dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Employee Routes
Route::get('/employees', function () {
    return view('employees.index');
});

Route::get('/employees/create', function () {
    return view('employees.create');
});

// Payroll Route
Route::get('/payroll', function () {
    return view('payroll.index');
});

// Leave Management Route
Route::get('/leave-management', function () {
    return view('leave-management.index');
});
