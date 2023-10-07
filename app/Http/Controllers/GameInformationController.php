<?php

namespace App\Http\Controllers;

use App\Models\GameInformation;
use App\Models\Attendance;
use Illuminate\Http\Request;

class GameInformationController extends Controller
{
    public function gameInformation(Request $request)
    {
        // 試合情報の取得
        $game_information = GameInformation::get();

        return view('/game_information', ['game_information' => $game_information]);
    }

    public function create(Request $request)
    {
        $attendance_index = Attendance::latest()->get();
        return view('attendance', compact('attendance_index'));
    }
}
