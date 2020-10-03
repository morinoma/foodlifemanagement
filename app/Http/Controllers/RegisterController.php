<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function add()
{
    return view('article.add');
}

public function create(Request $request)
{
    $article = new Article;
    $article->user_id = $request->user_id;
    $article->title = $request->title;
    $article->content = $request->content;
    $article->save();
    return redirect('/');
}
}

