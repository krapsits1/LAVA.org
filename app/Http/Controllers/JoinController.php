<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\JoinUsMail;

class JoinController extends Controller
{
    public function join()
    {
        return view('join');
    }   

    
    public function sendMessage(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Prepare email details
        $details = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ];

        // Send email
        Mail::to('lava.latvija@gmail.com')->send(new JoinUsMail($details));

        // Redirect back with success message
        return back()->with('success', 'Ziņa veiksmīgi nosūtīta!');
    }
}
