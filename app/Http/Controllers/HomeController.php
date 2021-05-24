<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;





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

        // برای نشان دیتا توی ویو اش = new TestMail('moein' , 1999)
        // Mail::to('moeinalizade58010@gmail.com')->send(new TestMail('moein' , 1999));

//        session(['key' => 'value', 'name' => 'Moein', 'family' => 'Alizade']);


//        chkie with lifetime = 60min
//        cookie()->queue(cookie('name', 'Moein', 60));

//        ساده شده کد بالایی چون با صف می توان دقیقا مثل کوکی رفتار بکنیم
//        cookie()->queue('family', 'Alizade', 60*24);


//        برای چک کردن دیتای کسی که لاگین کرده هست
//          dd(auth()->user());

//          چک کنیم که کاربر لاگین کرده یا نه
//            dd(auth()->check());

<<<<<<< HEAD


//        پیدا کردن و دریافت دیتای یوزر 5
          $user = User::find(5);
//          return $user;
//        get() => آبجکت یا همون شی را به رشته تبدیل می کند و به ما بر می گرداند و در واقع یک لیست داریم
//        return $user->articles()->get();

//        آرتیکا های مربوط به کاربر ما را بازگردان
//        $user->articles()->get();
//        return $article;



//        پیدا کردن دیتای یوزر از آرتیکلی که داریم
//          پیدا کردن آرتیکل با آیدی 5
          $article = Article::find(5);


//         دیتای یوزر را به ما نشان بده و فقط یک آبجکت تکی داریم get()این
//         get() و نیاز نیست گت را بصورت یک متد قرا بدهیم یعنی
//          return $article->user()->get();




//        اولی دیتای یوزر را بگیر و نشان بده یعنی چون میدانیم هر آرتیکل یک یوزر داره پس لازم نیست آرایه به ما برگرداند و فقط یکی را برگرداند
//        return $article->user()->first();
//        بازگرداند Property ساده شده کد بالایی یعنی بصورت
//        return $article->user;

//        آیدی کاربر را بر می گرداند
//        return $article->user()->first()->id;
//        return $article->user->id;
//        ساده شده کد بالایی
//          return $article->user->id;


          $user = $article->user;




=======
>>>>>>> eda793ad033d0a0bf031c8bf2be611cf85044580


        $articles = Article::orderBy('id' , 'desc')->get();

        //ارسال آرتیکل
        // return view('index', ['articles' => $articles]);

        //به ما بر می کرداند ['articles' => $articles] یک لیستی شبیه به این
        return view('index', compact('articles'));

    }

    public function about(){
        // dd(session('key'));
        // dd(session('name'));



//        get cookie and use in different routes
//        dd(request()->cookie('Family'));
//        request()->cookie('Family')


//        delete cookie
//          cookie()->queue(cookie()->forget('family'));
//          $cookie = \Cookie::forget('family');



        // را بر می کرداند session همه مقادیر = all()
//         dd(session()->all());



//        اگه نام نداشت آنگاه مقدار پیش فرض را به ما برگداند
//           dd(session()->get('name' , 'Moein'));

// چون پارامتر اولش آرایه نیست، خود لاراول مفهموم بالایی را اجرا می کند
//        dd(session('name' , 'Moein'));


        //  session()->forget('')  =>  مشخص می کنیم را ازش حذف می کند session مقادیری که ما از
//        session()->forget('name');


//has() => یعنی وجود دارد یا نه ؟
//        dd(session()->has('family'));


//session()->flush('') = ها را برای ما پاک می کند sessions همه ی
//        session()->flush('');






        return view('about');
//        return view('about')->withCookie($cookie);

    }

    public function contact(){
        return view('contact');
    }
}
