<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\LanguageController;

Route::get('/',[App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [App\Http\Controllers\AboutUsController::class, 'about'])->name('aboutUs');
Route::get('/contact', [App\Http\Controllers\ContactsController::class, 'contact'])->name('contact');
Route::get('/join', [App\Http\Controllers\JoinController::class, 'join'])->name('join');
Route::get('/information', [App\Http\Controllers\InformationController::class, 'info'])->name('info');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'news'])->name('news');


Route::get('/tulkot', [App\Http\Controllers\TranslationController::class, 'translateLvToEn']);
Route::get('/switch-language/{lang}', [LanguageController::class, 'switchLanguage'])->name('switch-language');


