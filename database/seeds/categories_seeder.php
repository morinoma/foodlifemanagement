<?php

use Illuminate\Database\Seeder;

class categories_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
               'id' => '1',
               'category_name'  => 'kakoushokuhin' ,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => '2',
            'category_name'  => 'seisenshokuhin' ,
         ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => '3',
            'category_name'  => 'tenkabutsu' ,
         ];
         DB::table('categories')->insert($param);


    }
}
