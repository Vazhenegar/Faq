<?php

use Illuminate\Support\Facades\Route;
use faq\Http\Controllers\FaqController;

Route::get('/faqAdmin', 'faq\Http\Controllers\FaqController@admin');
Route::resource('faq', FaqController::class);
