<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Http\Requests\Attendance\StoreAttendanceRequest;
use App\Http\Requests\Attendance\UpdateAttendanceRequest;

class AttendanceController extends Controller
{
    // 出欠一覧表示
    // ToDo: int|stringを修正
    public function index(int|string $game_no): object
    {
        $attendance_index = Attendance::where('game_no', $game_no)
            ->latest()
            ->get();
        return view('attendance.index', compact('attendance_index', 'game_no'));
    }

    // 出欠登録
    public function store(StoreAttendanceRequest $request)
    {
        $attendance = new Attendance($request->validated());
        $attendance->save();

        return to_route('attendance.index', ['game_no' => $attendance['game_no']])->with('success', '出欠登録しました');
    }

    // 編集
    public function edit(int $player_no)
    {
        $attendance_player = Attendance::find($player_no);
        
        return view('attendance/edit', compact('attendance_player'));
    }

    // 更新処理
    // TODO:コメントだけを変更する場合、出欠登録が行われずに、
    //　編集のページに戻ってしまう
    public function update(UpdateAttendanceRequest $request)
    {
        $updateData = $request->validated();
        $game_no = $request->game_no;

        $attendance = Attendance::findOrFail($request->player_id);
        $attendance->update($updateData);

        return to_route('attendance.index', ['game_no' => $game_no]);
    }

    // 削除処理
    public function delete(Request $request, int $player_no)
    {
        $player_info = $request->all();
        $attendance = Attendance::findOrFail($player_no);
        $attendance->delete();

        return to_route('attendance.index', ['game_no' => $player_info["game_no"]]);
    }
}