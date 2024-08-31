<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'dob' => 'required|date',
            'training' => 'required|string|max:255',
            'english_level' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'referees' => 'required|string',
        ]);

        Registration::create($validatedData);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
