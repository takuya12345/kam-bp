<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
// use Illuminate\Http\Request;
use App\Http\Requests\Attendance\StoreAttendanceRequest;
use Illuminate\Support\Facades\Log;


class AttendanceController extends Controller
{
    // 出欠登録
    public function store(StoreAttendanceRequest $request)
    {
        $attendance = new Attendance($request->validated());
        Log::debug($attendance);
        $attendance->save();

        return to_route('attendance.create')->with('success', '登録しました。');
    }
}
