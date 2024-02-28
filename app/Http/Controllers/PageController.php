<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        $nama = 'Yuma Rakha';
        $nim = '2241720194';

        return "Nama: $nama <br> NIM : $nim";
    }
    public function articles($nomer){
        return 'Halaman Artikel dengan id '.$nomer;
    }
}