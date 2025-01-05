<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Interfaces\AuthRepositoryInterfaces;
use Illuminate\Support\Facades\Auth;

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
        return view('landing-page.auth.login');
    }

    public function getForgotPassword()
    {
        return view('landing-page.auth.forgot-password');
    }

    public function getRegister()
    {
        return view('landing-page.auth.register');
    }

    public function postLogin()
    {
        $credentials = request()->all();

        if ($this->authRepository->login($credentials)) {
            if (Auth::user()->hasRole('admin')) {
                return redirect('/dashboard');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Email or password is not correct']);
    }

    public function postLogout()
    {
        $this->authRepository->logout();
        return redirect('/login');
    }
}
