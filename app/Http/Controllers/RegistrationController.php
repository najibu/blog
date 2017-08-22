<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

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

        // Redirect to home
        return redirect()->home();
    }
}
