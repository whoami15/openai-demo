<?php

use App\Http\Controllers\GenerateImage;
use App\Http\Controllers\TextCompletion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-image', GenerateImage::class);

Route::get('/text-completion', TextCompletion::class);
