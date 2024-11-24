<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    // Redirect the user to the Google authentication page
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle callback from Google
    public function handleGoogleCallback()
    {
        try {
            // Fetch the Google user details
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Check if a user with this Google ID already exists
            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                // If no user exists with this Google ID, create a new user
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt(Str::random(16)), // Generate random password
                ]);
            }

            // Log the user in
            Auth::login($user);

            return redirect()->route('home'); // Redirect to home page after login
        } catch (\Exception $e) {
            // Handle errors gracefully
            return redirect()->route('login')->withErrors(['msg' => 'Something went wrong.']);
        }
    }
}
