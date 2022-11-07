<?php

use App\Http\Controllers\GenerateImage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-image', GenerateImage::class);
