<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing-page.index');
    }

    public function getTentangKami()
    {
        return view('landing-page.tentang-kami');
    }

    public function getStatistik()
    {
        return view('landing-page.statistik');
    }

    public function getLapor()
    {
        return view('landing-page.lapor');
    }
}
