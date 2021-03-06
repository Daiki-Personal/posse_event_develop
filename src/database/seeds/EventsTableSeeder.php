<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            ['name' => '本気の鬼ごっこ👹',
            'start_at' => '2021-09-20 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 02:00:00',
            'detail' => '本気の鬼ごっこ👹inみなとみらい<br>~幼心を取り戻せ！~',
            'questionnaire_id'=>1,
            'posse_branch'=>2, 
            ],
            ['name' => '🧩 ボドゲ会 🧩',
            'start_at' => '2021-09-23 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 02:00:00',
            'detail' => '~こないと秋は始まらない~9/12(日)13:00~18:00@ボドゲカフェ',
            'questionnaire_id'=>1,
            'posse_branch'=>1, 
            ],
            ['name' => '何なんｗ',
            'start_at' => '2021-09-22 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 02:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1, 
            ],
            ['name' => 'キラリ！',
            'start_at' => '2021-09-28 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 00:30:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => '横もく',
            'start_at' => '2021-10-22 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 12:30:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => 'APPLE',
            'start_at' => '2021-09-28 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 12:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => '猫って美味しい？',
            'start_at' => '2021-10-22 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 12:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => '縦もく',
            'start_at' => '2021-09-23 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 22:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => 'スペモク',
            'start_at' => '2021-09-22 21:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 00:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => '飯モク',
            'start_at' => '2021-09-24 22:30:00',
            'end_at' => '2021-11-11 00:30:00',
            'deadline' => '2021-11-11 00:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => '課題サポート会',
            'start_at' => '2021-09-27 22:30:00',
            'end_at' => '2021-11-11 22:35:00',
            'deadline' => '2021-11-11 00:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => '深い話会',
            'start_at' => '2021-09-27 22:30:00',
            'end_at' => '2021-11-11 22:35:00',
            'deadline' => '2021-11-11 00:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => '猫と遊ぼう！',
            'start_at' => '2021-09-28 22:30:00',
            'end_at' => '2021-11-11 22:35:00',
            'deadline' => '2021-11-11 00:00:00',
            'detail' => '詳細だぜ！！！！！！！！！！！！！！！！！！！！！！！<br>！！！！！！！！！！！！',
            'questionnaire_id'=>1,
            'posse_branch'=>1,
            ],
            ['name' => 'posse課題',
            'start_at' => '2021-09-29 22:30:00',
            'end_at' => '2021-11-11 22:35:00',
            'deadline' => '2021-11-11 00:00:00',
            'detail' => 'posse課題をちゃんと出してください！！',
            'questionnaire_id'=>2,
            'posse_branch'=>1,
            ],
        ]);
    }
}
