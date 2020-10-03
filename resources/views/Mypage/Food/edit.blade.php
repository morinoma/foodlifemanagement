@extends('layouts.app')

@section('content')



    <form action="/mypage/food/update" method="post">
      @csrf 
       <div>
            <label for="id"></label>
            <input type ="hidden" id="id" name="id" value="{{$food->id}}">
        </div>
                
        <div>
            <label for="user_id"></label>
            <input type="hidden" id="user_id" name="user_id" value="{{$food->user_id}}">
        </div>
        <div>
            <label for="food_category">食品のカテゴリー</label>
           
            <select type="text" class="form-control" id="food_category" name="food_category">                          
                @foreach(Config::get('Food.Category') as $key => $value)
                <option value="{{$key}}" @if($food->food_category==$key)selected @endif>{{ $value }}</option>
                @endforeach
              </select> 
        
        </div>
        <div>
            <label for="name">食品名</label>
            <input type="text" id="name" name="food_name" value="{{$food->food_name}}">
        </div>
        <div>
            <label for="name">購入先</label>

            <select type="text" class="form-control" id="where_to_eat" name="where_to_eat">                          
                @foreach(Config::get('Food.food_place') as $key => $value)
                <option value="{{$key}}" @if($food->where_to_eat==$key)selected @endif>{{ $value }}</option>
                @endforeach
              </select>
        </div>

        <div>
            <label for="name">時間</label>
            <input type="text" id="name" name="eating_time" value="{{$food->eating_time}}">
        </div>

                <input type="submit" value="送信する">
                
    </form>

    <form action="/mypage/food/remove" method="post">
    @csrf 

    <div>
            <label for="id"></label>
            <input type ="hidden" id="id" name="id" value="{{$food->id}}">
    </div>  

    <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("君は本当に削除するつもりかい？");'>
    
    </form>
  
      <a href="{{ route('top') }}">トップページ</a>
      <a href="{{ route('foodtop') }}"  >食生活管理画面</a>
      
      <a href="{{ route('mypage.food.index') }}">購入データ一覧</a>
      <a href="{{ route('mypage.food.new') }}">購入データ新規入力</a>



@endsection

