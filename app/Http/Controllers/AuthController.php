<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register()
    {
        return view("auth.register", [
            "title" => "ثبت نام"
        ]);
    }

    public function registerPost(RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated["password"] = bcrypt($validated["password"]);

        try {
            $user = User::create($validated);
        } catch (Exception $e) {
            
            Log::info($e);

            return back()->withErrors([
                "general" => "مشکلی در ثبت نام امده "
            ]);
        }

        Auth::login($user);

        return redirect()->route("dashboard");
    }

    public function login()
    {
        return view(
            "auth.login",
            [
                "title" => "ورود"
            ]
        );
    }

    public function loginPost(LoginRequest $request)
    {

        $user = User::query()
            ->where("email", $request
                ->input("email"))
            ->first();

        if (!Hash::check($request->input("password"), $user->password)) {
            return back()->withErrors([
                "general" => "ایمیل یا رمز عبور اشتباه است "
            ]);
        }

        Auth::login($user);

        return redirect()->route("dashboard");
    }

    public function logOut()
    {

        Auth::logout();

        return redirect()->route("index");
    }
}
