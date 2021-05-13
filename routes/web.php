<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;

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

    // return App\Models\Article::factory()->create();
    // return App\Models\Article::factory()->count(10)->create();
      
    return view('index');
    
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//  استفاد کردیم get می توان دریافت کرد چون از متد  get تنها توی روت  دیتا را بصورت  
Route::prefix('admin')->group(function() {
    Route::get('/articles/create' , function() {
        // اگر داده ای بود    
        // if($_GET) {
        //    dd($_GET);
        // }
        return view('admin.articles.create');
    });

    // فرستادن دیتا از فرم بصورت پست به روت
    Route::post('/articles/create' , function() {
        // dd('test');
        
        //دریافت اطلاعات
        // dd($_POST);           request is best 
        // dd(request()->all());
        // dd(Request::all());
        // dd(request('title'));




        // article اضافه کردن داده به جدول  


        // چک کردن داده که آیا دیتای ما اعتبار لازم را دارد یا نه؟ 



        // 1-A) article ایجاد یک شی از 
        // $article = new Article();
        //ریختن مقادیر توی شی ها
        // $article->title = request('title');
        // $article->slug = request('title');
        // $article->body = request('body');
        // $article->save();

        // 1-B) this is best
        // Article::create([
        //     'title' => request('title'),
        //     'slug' => request('title'),
        //     'body' => request('body')
        // ]);


        // 2) زمانی که دیتای ما به روت پست میاد، هیچ وقت ویویی را نشان ندهیم و نیز هیچ داده ای را بر نگردانیم. یعنی بعد از اتمام پردازش ما توی روت پست باید کاربر را به یک روت گت ریدایرکت کنیم
        // return redirect('/admin/articles/create');


        // $validator = Validator::make(request()->all() , [
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ]);

        // vali
        // if($validator->fails()) {
        //     return redirect()
        //         //بازگشت به صفخه قبل
        //         ->back()
        //         ->withErrors($validator);
        // }


        // vali ساده شده 
        // Validator::make(request()->all() , [
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ])->validate();


        // vali بیشتر ساده شده 
        $validate_data = Validator::make(request()->all() , [
            'title' => 'required|min:10|max:50',
            'body' => 'required'
        ],[
            // 'title.required' => 'فیلد مقاله را وارد کنید'
        ])->validated();

        dd($validate_data);


        // 1-B) this is best
        Article::create([
            'title' => $validate_data['title'],
            'slug' => $validate_data['title'],
            'body' => $validate_data['body'],
        ]);

        return redirect('/admin/articles/create'); 

    });
}); 