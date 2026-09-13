<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/companies', function () {
    $companies = \App\Models\Company::all();

    return view('companies', compact('companies'));
});

Route::get('/training', [\App\Http\Controllers\TrainingController::class, 'index']);

Route::get('/spain', function () {
    return view('spain');
});

Route::get('/cap', function () {
    return view('cap');
});
