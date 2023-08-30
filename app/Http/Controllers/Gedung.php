<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Gedung extends Controller
{
    function index(Request $request, $id){

        $res = Http::get('https://api.codefm.my.id/gedungs/'.$id);

        $data = $res->json();

        // dd($data);
        
        return view('gedung', ['data' => $data]);

    }
}