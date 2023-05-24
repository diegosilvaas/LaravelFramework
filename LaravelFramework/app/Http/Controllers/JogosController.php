<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index ()
{
    // dd('Ola mundo');
    $nome = 'GTA';
    return view('jogos', ['nome'=>$nome]);
}
}

