<?php

namespace App\Http\Controllers;

use App\Models\GameInformation;

class GameInformationController extends Controller
{
    public function gameInformation(): object
    {
        // 試合情報の取得
        $game_information = GameInformation::get();

        return view('/game_information', ['game_information' => $game_information]);
    }
}
