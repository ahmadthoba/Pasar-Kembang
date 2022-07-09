<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaController extends Controller
{
    //
    public function index()
    {
        return view('layouts/harga', [
            "title" => "Harga"
        ]);
    }
}
