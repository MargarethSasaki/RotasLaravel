<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller

{
    public function contato(){
        return view('site.sobre-nos');
    }
}