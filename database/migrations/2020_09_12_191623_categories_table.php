<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->timestamps();           
            $table->string('category_name');
                  
            // $table->integer('user_id');
            // $table->integer('food_category');
            // $table->string('food_name');
            // $table->integer('where_to_eat');
            // $table->datetime('eating_time');
            
            // 食品のカテゴリー
            // 1:加工食品
            // 2:生鮮食品
            // 3:添加物（着色料、香料、膨張剤など）            

        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('categories');
    }
}

