<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GameInformation;
use App\Http\Requests\Admin\StoreGameRequest;
use App\Http\Requests\Admin\UpdateGameRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $game_information = GameInformation::orderby('date', 'asc')->get();
        return view('admin.game.index', compact('game_information'));
    }

    public function create()
    {
        // $game_information = GameInformation::latest()->get();
        // return view('admin.game.create', compact('game_information'));
        return view('admin.game.create');
    }

    public function store(StoreGameRequest $request)
    {
        $validated = $request->validated();
        GameInformation::create($validated);
        $game_information = GameInformation::orderby('date', 'asc')->get();
        return view('admin.game.index', compact('game_information'));
    }

    // 編集
    public function edit(int $game_no)
    {
        $edit_game_info = GameInformation::find($game_no);
        return view('admin.game.edit', compact('edit_game_info'));
    }

    // 更新処理
    // TODO:コメントだけを変更する場合、出欠登録が行われずに、
    //　編集のページに戻ってしまう
    public function update(UpdateGameRequest $request)
    {
        $update_data = $request->validated();
        $game_information = GameInformation::findOrFail($update_data["game_id"]);
        
        // 更新処理
        $game_information->update($update_data);
        
        // 一覧表示
        $game_information = GameInformation::orderby('date', 'asc')->get();
        return view('admin.game.index', compact('game_information'));
    }

    // 削除処理
    public function delete(Request $request)
    {
        $delete_data = $request->all();
        $delete_game_info = GameInformation::findOrFail($delete_data["game_no"]);
        $delete_game_info->delete();

        return to_route('admin.game.index')->with('success', '削除しました');
    }
}
