<?php

use Illuminate\Database\Seeder;

class foodplace_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        // ・id番号
        // ・place name（購入先名）
            // 購入先
            // 1:外食（デリバリー含む）
            // 2:コンビニエンスストア
            // 3:自炊
            // 4:その他

     public function run()
    {
        $param = [
            'id' => '1',
            'place_name'  => 'gaishoku' ,
             ];
        DB::table('place_name')->insert($param);
        
        $param = [
            'id' => '2',
            'place_name'  => 'conveniencestore' ,
            ];
        DB::table('place_name')->insert($param);
    
        $param = [
            'id' => '3',
            'place_name'  => 'selfcooking' ,
        ];
        DB::table('place_name')->insert($param);

        $param = [
            'id' => '4',
            'place_name'  => 'other' ,
        ];
        DB::table('place_name')->insert($param);
    
    }
}
