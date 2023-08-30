<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Fakultas extends Controller
{
    function index(Request $request){

        $res = Http::get('https://api.codefm.my.id/fakultas/');

        $data = $res->json();
        
        // dd($data);
        
        return view('fakultas', ['data' => $data]);

    }
}
