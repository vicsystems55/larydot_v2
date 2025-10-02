<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/post/{slug}', [PageController::class, 'post']);

Route::get('/services', [PageController::class, 'services']);
Route::get('/contact-us', [PageController::class, 'contact']);
Route::get('/job-vacancies', [PageController::class, 'jobs']);

Route::post('/contact-form-submit', [ContactFormController::class, 'contactFormSubmit']);

