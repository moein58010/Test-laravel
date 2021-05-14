<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(){
        // return view('welcome');
        // return view('index');
        // $title = 'Hello !';
        // return view('index', ['title' => $title]);
        // برای ارنباط برقرار کردن با دیتابیس و جداول مختلف است  DB کلاس
        // تمام دیتا های جدول را بصورت یک لیست بر می گرداند  get() با 
        // $articles = DB::table('articles')->get();


        // پیدا کردن یا برای بازگرداندن یک از آنها == where() or find ()
        // $articles = DB::table('articles')->find(1);
    
        
        // insert data
        // $articles = DB::table('articles')->insert([
        //     'title' => 'article 3',
        //     'slug' => 'article-3',
        //     'body' => 'this is article 3 '
        // ]);

        // update data
        // $articles = DB::table('articles')->where('slug' , 'article-3')->update([
        //     'body' => 'this is article 33'
        // ]);

        // order
        // $articles = DB::table('articles')->orderBy('id')->get();


        // reverse order or مرتب سازی نزولی
        // $articles = DB::table('articles')->orderBy('id' , 'desc')->get();


        // $articles = Article::all();
        // $articles = Article::orderBy('id')->get();
        // $articles = Article::orderBy('id' , 'desc')->get();
        

        // برای تست استفاده می شود
        // dd($articles);
        // dd($articles->title);
        // return view('index');

        // return App\Models\Article::factory()->create();
        // return App\Models\Article::factory()->count(10)->create();
        
        $articles = Article::orderBy('id' , 'desc')->get();
        return view('index');

    }

    public function about(){
        return view('about');    
    }

    public function contact(){
        return view('contact');   
    }
}
