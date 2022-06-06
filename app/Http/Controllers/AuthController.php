<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response(['message' => 'Email address tidak terdaftar'], 404);
        }


        if (!password_verify($request->password, $user->password)) {
            return response(['message' => 'Password salah'], 401);
        }

        Auth::login($user, true);

        return response()->json([
            'token' => $user->createToken($request->device_name ?: 'web')->plainTextToken,
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response('', 204);
    }

    public function me()
    {
        return User::find(auth()->id());
    }
}
