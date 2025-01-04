<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterfaces;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterfaces
{
    public function login(array $credentials)
    {
        return Auth::attempt($credentials);
    }
}
