<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function join()
    {
        return view('join');
    }

    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::raw($validatedData['message'], function ($mail) use ($validatedData) {
            $mail->to('emilsvetra@gmail.com') // Replace with the recipient's email
                 ->from($validatedData['email'], $validatedData['name'])
                 ->subject($validatedData['subject']);
        });

        return back()->with('success', 'Ziņa veiksmīgi nosūtīta!');
    }
}
