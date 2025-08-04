<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\MoodController;
use Illuminate\Support\Facades\Auth;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/login', [LoginController::class, 'LoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'auth_login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Signup
Route::get('/signup', [SignUpController::class, 'SignUpForm'])->name('register');
Route::post('/signup', [SignUpController::class, 'auth_signup']);

// Forgot Password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Dashboard Feature Routes
Route::get('/mood-tracker', [MoodController::class, 'index'])->name('mood_tracker')->middleware('auth');
Route::post('/mood-tracker', [MoodController::class, 'store'])->name('mood.store')->middleware('auth');
Route::get('/mood-history', [MoodController::class, 'history'])->name('mood.history')->middleware('auth');

Route::get('/journal-entry', function () {
    return view('features.journal-entry');
})->name('journal_entry')->middleware('auth');

Route::get('/appointment-booking', function () {
    return view('features.appointment-booking');
})->name('appointment_booking')->middleware('auth');

Route::get('/peer-support-chat', function () {
    return view('features.peer-support-chat');
})->name('peer_support_chat')->middleware('auth');

Route::get('/daily-emotion-log', function () {
    return view('features.daily-emotion-log');
})->name('daily_emotion_log')->middleware('auth');

Route::get('/daily-tips', function () {
    return view('features.daily-tips');
})->name('daily_tips')->middleware('auth');

Route::get('/educational-resources', function () {
    return view('features.educational-resources');
})->name('educational_resources')->middleware('auth');

Route::get('/reminders', function () {
    return view('features.reminders');
})->name('reminders')->middleware('auth');

Route::get('/breathing-exercise', function () {
    return view('features.breathing-exercise');
})->name('breathing_exercise')->middleware('auth');


