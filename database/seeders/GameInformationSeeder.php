<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        // ダミー記事生成件数
        $num = 30;

        $insertData = array_map(
            function($no) use($num) {
                $created_at = today()->subMinutes($num+$no+1)->setHours(random_int(9, 18))->setMinutes(random_int(0, 59));
                $updated_at = random_int(0, 1) === 1 ? today()->subMinutes(random_int(1, $num+$no))->setHours(random_int(9, 18))->setMinutes(random_int(0, 59)) : $created_at;
                return [
                    'date' => 'ダミー'. $no,
                    'place' => '会場'. $no,
                    'match_format' => '練習試合',
                    'game_information' => "vs パッシオーネ\nvs ヒロヴェイ",
                    'organizer' => 'カム',
                    'created_at' => $created_at,
                    'updated_at' => $updated_at
                ];
            },
            range(1, $num)
        );
        DB::table('game_information')->insert($insertData);
    }
}
