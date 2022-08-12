<?php

namespace App\Http\Controllers;

use App\Http\Service\PokedexService;
use Illuminate\Http\Request;

class PokemonInfoController
{
    public function index(Request $request)
    {
        $pokemon = PokedexService::getByNameorId($request->get('Search'));
        return view('search', $pokemon);
    }
}
