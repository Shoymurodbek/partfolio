<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'create']);

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

