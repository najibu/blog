<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        // Create and save the user.
        $user = User::create(
            request(['name', 'email', 'password'])
        );

        // Sigin them in.
        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));

        // Redirect to home
        return redirect()->home();
    }
}
