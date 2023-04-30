<?php

namespace App\Http\Controllers;

use App\Models\GameInformation;
use Illuminate\Http\Request;

class GameInformationController extends Controller
{
    public function gameInformation(Request $request)
    {
        $game_information = GameInformation::get();

        return view('/game_information', ['game_information' => $game_information]);
    }
}
