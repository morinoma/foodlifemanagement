<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use Auth;

class FoodController extends Controller
{
    // Mypage\FoodController@index 


    public function new(){
        return view('Mypage.Food.New');
    }

        // 小菅先生に確認要 new Food合ってる？
    public function foodnew(Request $request)
    {
        $food = new Food();
        $food->user_id = Auth::id();                 
        $food->food_category = $request->food_category;
        $food->food_name = $request->food_name;
        $food->where_to_eat = $request->where_to_eat;
        $food->eating_time = $request->eating_time;
        $food->save();
        return redirect('/mypage/food/index');

        //    $table->bigIncrements('id');
        // $table->timestamps();
        // $table->integer('user_id');
        // $table->integer('food_category');
        // $table->string('food_name');
        // $table->integer('where_to_eat');
        // $table->datetime('eating_time');
    }   

    //更新処理    
    public function edit($id)
    {
    $food = Food::find($id);
    return view('Mypage.food.edit', compact(['food'])); 
    }

    public function update(Request $request)
    {
    $food = Food::find($request->id);
    $food->user_id = $request->user_id;
    $food->food_category = $request->food_category;
    $food->food_name = $request->food_name;
    $food->where_to_eat = $request->where_to_eat;
    $food->eating_time = $request->eating_time;
    $food->update();
    return redirect('/');
    }
    
    // 削除処理
    public function delete($id)
    {
        $food = Food::find($id);
        return view('Mypage.food.edit', compact(['food'])); 
    }
    
    public function remove(Request $request)
    {
        $food = Food::find($request->id);
        $food->user_id = $request->user_id;       
        $food->delete();
        return redirect('/mypage/food/index');
    }

    // 一覧表示
    public function index()
    {
        $foods = Food::all();
        return view('Mypage.food.index', compact(['foods']));
    }


}



