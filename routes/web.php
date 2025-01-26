<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/tulkot', [App\Http\Controllers\TranslationController::class, 'translateLvToEn']);

Route::get('/switch-language/{lang}', [LanguageController::class, 'switchLanguage'])->name('switch-language');

Route::get('/test-kernel', function () {
    return 'Kernel executed!';
});
