<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\AuthRepositoryInterfaces;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private AuthRepositoryInterfaces $authRepository;

    public function __construct(AuthRepositoryInterfaces $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.login');
    }

    public function getForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postLogin()
    {
        $credentials = request()->only('email', 'password');

        if ($this->authRepository->login($credentials)) {
            dd('Login Successful');
        }

        return redirect()->back()->withErrors(['email' => 'Email or password is not correct']);

    }
}
