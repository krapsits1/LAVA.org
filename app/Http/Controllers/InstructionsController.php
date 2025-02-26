<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructionsController extends Controller
{
    public function instructions()
    {
        return view('instructions');
    }
}
