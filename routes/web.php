<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-theme', function () {
    $darkMode = session('dark-mode', false); // Default to light mode if not set
    return response()->json(['dark_mode' => $darkMode]);
});

Route::post('/set-theme', function (Request $request) {
    $darkMode = $request->input('dark_mode', false);
    session(['dark-mode' => $darkMode]); // Store the theme in session
    return response()->json(['success' => true]);
});
