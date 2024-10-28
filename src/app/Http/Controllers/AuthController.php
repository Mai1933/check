<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Models\AdminUser;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers;
class AuthController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function login()
    {
        return view('login');
    }

    public function store(
        RegisterRequest $request,
        CreatesNewUser $creator
    ): RegisterResponse {
        if (config('fortify.lowercase_usernames')) {
            $request->merge([
                Fortify::username() => Str::lower($request->{Fortify::username()}),
            ]);
        }

        event(new Registered($user = $creator->create($request->all())));

        $this->guard->login($user);

        return app(RegisterResponse::class);
    }
}

