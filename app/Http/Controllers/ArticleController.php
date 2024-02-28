<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($nomer){
        return 'Halaman Artikel dengan id '.$nomer;
    }
}
