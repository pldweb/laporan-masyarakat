<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterfaces;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterfaces
{
    public function login(array $credentials)
    {
       $credentials = array_slice($credentials, 1);

        return Auth::attempt($credentials);
    }

    public function logout()
    {
       return Auth::logout();
    }
}
