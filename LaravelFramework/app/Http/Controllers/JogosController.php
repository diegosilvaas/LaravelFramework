<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index ()
{
    // dd('Ola mundo');
    $jogos = Jogo::all();
    // dd($jogos);
    return view('jogos.index', ['jogos'=>$jogos]);
}

public function create()
{
    return view('jogos.create');
}
}

