<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contact()
    {
        return view('contact',['googleApiKey' => env('GOOGLE_MAPS_API_KEY')]);
    }
}
        