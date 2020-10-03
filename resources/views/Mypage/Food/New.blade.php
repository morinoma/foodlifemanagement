@extends('layouts.app')

@section('content')


<html>
    <form action="/mypage/food/register" method="post">
      @csrf 

        <div>
            <label for="food_category">食品のカテゴリー</label>
            <select type="text" class="form-control" id="food_category" name="food_category">                          
                @foreach(Config::get('Food.Category') as $key => $value)
                <option value="{{$key}}" food_category>{{ $value }}</option>
                @endforeach
              </select>
        </div>
        <div>
            <label for="name">食品名</label>
            <input type="text" id="name" name="food_name">
        </div>
        <div>
            <label for="name">購入先</label>
            <select type="text" class="form-control" id="where_to_eat" name="where_to_eat">                          
                @foreach(Config::get('Food.food_place') as $key => $value)
                <option value="{{$key}}" where_to_eat>{{ $value }}</option>
                @endforeach
              </select>
        </div>
        <div>
            <label for="name">時間</label>
            <input type="text" id="name" name="eating_time">
        </div>

                <input type="submit" value="送信する">

                
    </form>
   
      <a class="btn-primary btn-lg" href="{{ route('top') }}" role="button">トップページ</a>
      <a class="btn-success btn-lg" href="{{ route('foodtop') }}" role="button">食生活管理画面</a>
      <a class="btn-info btn-lg" href="{{ route('mypage.food.index') }}" role="button">購入データ一覧</a>


</html>

@endsection


<!--  $food->user_id = $request->user_id;
        $food->food_category = $request->food_category;
        $food->food_name = $request->food_name;
        $food->where_to_eat = $request->where_to_eat;
        $food->eating_time = $request->eating_time; -->