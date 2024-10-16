<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{


    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'nationality' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'dob' => 'required|date',
            'training' => 'required|string|max:255',
            'english_level' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'referees' => 'required|string',
        ]);

        $user = Registration::create($validatedData);

        // Send the email to a specific address
        Mail::to('info@teachinuk.co.uk')->send(new UserRegisteredMail($user));


        return redirect()->back()->with('success', 'Registration successful!');
    }
}
