<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('site.index');
    }

    public function getTesting(){

//       $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';
//       $ch = curl_init($url);
//
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
//
//       $response = curl_exec($ch);
//       if (curl_errno($ch)) {
//           die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
//       }
//
//       curl_close($ch);
//       $data = json_decode($response, true);

        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');

        dd($response);

       return response()->json($response);


        return view('site.index', compact('data'));
    }
}
