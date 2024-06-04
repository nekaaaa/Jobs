<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'employer_name' => 'required|unique:employers,name',
            'employer_logo' => 'required|image'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        auth()->login($user);

        $logoPath = $request->employer_logo->store('logos');

        $user->employer()->create([
            'name' => $request->employer_name,
            'logo_path' => 'storage/'.$logoPath,
            'user_id' => auth()->user()->id,
        ]);

        $request->session()->regenerate();

        return redirect('/');
    }
}
