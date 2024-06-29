<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration-form');
    }

    public function registrationProcess(RegistrationRequest $request)
    {
        /** @var User $user */
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect(route('chat'));
    }

    public function logoutProcess()
    {
        auth()->logout();

        return redirect(route('chat'));
    }

    public function showLoginForm()
    {
        return view('login-form');
    }

    public function loginProcess(LoginRequest $request)
    {
        $isUserExists = auth()->attempt($request->validated(), true);

        if ($isUserExists) {
            return redirect(route('chat'));
        }
        return redirect(route('show-login-form'))->withErrors(['Invalid username or password']) ;
    }

}
