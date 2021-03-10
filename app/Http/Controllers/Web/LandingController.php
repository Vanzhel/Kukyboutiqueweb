<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing/paneladmin');
    }

    public function listsale(){
        return view('landing/listaventa');
    }

    public function newsale(){
        return view('landing/nuevaventa');
    }

    public function listproduct(){
        return view('landing/listaproducto');
    }
}
