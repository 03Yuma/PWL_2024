<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $nama = 'Yuma Rakha';
        $nim = '2241720194';

        return "Nama: $nama <br> NIM : $nim";
    }
}
