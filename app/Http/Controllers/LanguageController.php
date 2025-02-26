<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Switch the application language.
     *
     * @param  string  $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLanguage($lang)
    {
        // Set the locale in the session
        session(['locale' => $lang]);

        // Save the session to ensure it persists
        session()->save();

        \Log::debug('Session Data: ', session()->all());
        return redirect()->back();
    }
}
