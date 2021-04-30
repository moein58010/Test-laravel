<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/articles', function () {
//     return 'Articles List';
// });

// Route::get('/articles/{article}/{id}', function ($article, $id) {
//     return $article. '-' . $id;
// });


// Route::get('/admin', function () {
//     return 'admin panel';
// });

// Route::get('/admin/articles', function () {
//     return 'admin articles';
// });

// Route::prefix('admin')->group(function() {
//     Route::get('/', function () {
//         return 'admin panel';
//     });
//     Route::get('/articles', function () {
//         return 'admin articles';
//     });
//     Route::get('/user', function () {
//         return 'admin user';
//     });
//     Route::get('/categories', function () {
//         return 'admin gategories';
//     });
// });


// Route::get('/', function () {
//     $title = 'Hello !';
//     return view('index', ['title' => $title]);
// });


// Route::get('/articles/{article}', function ($article) {
//     // $title = 'Hello !';
//     $title = $article;
//     return view('index', [
//         'title' => $article,
//         'body' => "<script>console.log('Hello moeen')</script>"    
//     ]);
// });


// بصورت خیلی مستقیم
// Route::get('/articles/{article}', function ($article) {
//     return view('index', ['title' => $article]);
// });


// Route::get('articles/{article}', function ($article) {
//     return view('index' , [
//         'title' => $article,
//         'status' => true,
//         'articles' => [
//             'article1',
//             'article2'
//         ]
//     ]);
// });

use App\Models\Article;
Route::get('/', function () {
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


    // factory(Article::class , 10)->create();

    // $articles = Article::orderBy('id' , 'desc')->get();
    factory(Article::class ,10)->create();
    
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});