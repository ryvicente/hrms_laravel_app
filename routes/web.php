<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

// Redirect root based on role
Route::get('/', function () {
    if (auth()->check() && auth()->user()->role === 'accountant') {
        return redirect('/payroll');
    }
    return redirect('/dashboard');
});

// Dashboard Route
Route::get('/dashboard', function () {
    if (auth()->check() && auth()->user()->role === 'accountant') {
        return redirect('/payroll');
    }
    return view('dashboard');
});

// Employee Routes
Route::get('/employees', function () {
    return view('employees.index');
});

Route::get('/employees/create', function () {
    return view('employees.create');
});

// Payroll Routes
Route::get('/payroll', function (Request $request) {
    // Check if user is authenticated and is an accountant
    if (!auth()->check() || auth()->user()->role !== 'accountant') {
        return redirect('/dashboard')->with('error', 'Unauthorized access. Only accountants can access payroll management.');
    }

    return view('payroll.index');
})->middleware('auth');

// Leave Management Route
Route::get('/leave-management', function () {
    return view('leave-management.index');
});

// Login Route
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required','email'],
        'password' => ['required'],
    ]);

    $remember = $request->boolean('remember');

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput();
});

Route::post('logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');

// Register routes
Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => 'employee', // default role
    ]);

    Auth::login($user);
    $request->session()->regenerate();

    return redirect()->intended('/dashboard');
});
