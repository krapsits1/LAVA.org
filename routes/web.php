<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\LanguageController;

Route::get('/',[App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [App\Http\Controllers\AboutUsController::class, 'about'])->name('aboutUs');
Route::get('/contact', [App\Http\Controllers\ContactsController::class, 'contact'])->name('contact');
Route::get('/information', [App\Http\Controllers\InformationController::class, 'info'])->name('info');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'news'])->name('news');
Route::get('/instructions', [App\Http\Controllers\InstructionsController::class, 'instructions'])->name('instructions');
Route::get('/resources', [App\Http\Controllers\ResourcesController::class, 'resources'])->name('resources');
Route::get('/publications', [App\Http\Controllers\PublicationsController::class, 'publications'])->name('publications');

Route::get('/join', [App\Http\Controllers\JoinController::class, 'join'])->name('join');
Route::post('/join/send', [App\Http\Controllers\JoinController::class, 'sendMessage'])->name('sendMessage')->middleware('throttle:5,1');

Route::get('/privacy', [App\Http\Controllers\PrivacyController::class, 'privacy'])->name('privacy');    
Route::get('/tulkot', [App\Http\Controllers\TranslationController::class, 'translateLvToEn']);
Route::get('/switch-language/{lang}', [LanguageController::class, 'switchLanguage'])->name('switch-language');


