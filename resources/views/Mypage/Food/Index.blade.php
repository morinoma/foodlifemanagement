@extends('layouts.app')

@section('content')


  購入データ一覧
      
      <a class="btn-primary btn-lg" href="{{ route('top') }}" role="button">トップページ</a>
      <a class="btn-success btn-lg" href="{{ route('foodtop') }}" role="button">食生活管理画面</a>
      <a class="btn-warning btn-lg" href="{{ route('mypage.food.new') }}" role="button">購入データ新規入力</a>
     
    <br>
    <div class=”table-responsive”>
    <table class="table table-striped">
        <tr><th>ユーザーID</th><th>食品のカテゴリー</th><th>食品のカテゴリー名</th><th>食品名</th><th>購入先</th><th>食べた時間</th> </tr>
    @foreach($foods as $food)
        <tr>
            <td>{{ $food->user_id }}</td>
            
            <td>{{ $food->food_category }}</td>

            <td>
                @foreach(Config::get('Food.Category') as $key => $value)
                @if($food->food_category==$key) {{$value}} @endif  
                @endforeach
                </td>


            <td>{{ $food->food_name }}</td>
            <td>{{ $food->where_to_eat }}</td>
            <td>{{ $food->eating_time }}</td>
            <td><a href="/mypage/food/edit/{{$food->id}}" class="btn btn-primary btn-sm">編集</a></td>

        </tr>
    @endforeach
    </table>
    </div>
      
      
@endsection