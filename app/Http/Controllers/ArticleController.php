<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function single($article)
    {
        // return view('single' , ['article' => $article]);
        return view('single' , compact('article'));
    }
}
