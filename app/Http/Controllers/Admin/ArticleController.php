<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// مدل آرتیکل را باید حتما یوز کنیم چون ازش استفاده کردیم
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{


    public function __construct()
    {
//        احراز هویت روی تمام متد ها
//        $this->middleware('auth');


//        only(['']) => یعنی فقط
//        احراز هویت روی تمام متد ها بجز ایندکس
        $this->middleware('auth')->except(['index','create']);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // روت اصلی,form delete
     public function index()
     {
        return view('admin.articles.index' , [
            'articles' => Article::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // برای نمایش دادن فرم
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // برای ایجاد کردن مقاله مون
    // public function store(Request $request){
    public function store(ArticleRequest $request)
    {

        // $validate_data = Validator::make(request()->all() , [
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ])->validated();


        //  ساده شده کد های اعتبار سنجی بالا
        // $validate_data = $this->validate(request() , [
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ]);


        // validate request استفاده از
        // $validate_data = $request->validate([
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ]);


        // دریافت اطلاعات اعتبار سنجی شده
        $validate_data = $request->validated();



        Article::create([
            'title' => $validate_data['title'],
            // 'slug' => $validate_data['title'],
            'body' => $validate_data['body'],
        ]);

        return redirect('/admin/articles/create');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id){
    // هم باید تغییر بدیم return هم می توان استفاده کرد البته در  $id از  $article بجای
    // public function edit($article){
    // Article = خود مدل , $article = باید اسم مدل توی روت باشه
    public function edit(Article $article)
    {

        // $article = Article::findOrFail($id);

        // dd($article);
        // return $article;

        return view('admin.articles.edit' , [
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update($id){
    // public function update(ArticleRequest $request,$id){
    public function update(ArticleRequest $request,Article $article)
    {
        // قدم اول. اعتبار سنجی
        // $validate_data = Validator::make(request()->all() , [
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ])->validated();



        // role
        // [
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ]



        // ساده شده ی کد های اعتبار سنجی بالا
        // $validate_data = $this->validate(request() , [
        //     'title' => 'required|min:10|max:50',
        //     'body' => 'required'
        // ]);


        // دریافت اطلاعات اعتبار سنجی شده
        $validate_data = $request->validated();




        // article قدم دوم. پیدا کردن
        // Article = صدا زدن مدل یا الکونت آرتیکل هست
        // $article = Article::find($id);

        // ساده شده ی پایینی
        // $article = Article::findOrFail($id);

        // اگه آرتیکل خالی بود
        // if(is_null($article)) {
        //     abort(404);
        // }

        // return $article;

        // این فیلد ها رو توی آرتیکل آپدیت می کند
        // $article->update([
        //     'title' => $validate_data['title'],
        //     'slug' => $validate_data['title'],
        //     'body' => $validate_data['body'],
        // ]);

        // ساده شده بالایی
        // $validate_data = آرتیکل و بادی را بر می گرداند
        $article->update($validate_data);



        // return redirect('/admin/articles/create');
        // ریدایرکت به صفحه ی قبل(بجای کد بالایی این را استفاده می کنیم)
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function delete($id){
    public function destroy(Article $article)
    {
        // findOrFail => اگه وجود داشت بر می کرداند و اکه نه که خطای 404 را بر می گرداند
        // $article = Article::findOrFail($id);

        //delete() => متدی توی مدل ها هست که دیتا ها را حذف می کند
        $article->delete();

        // ریدایرکت به صفحه ی قبل
        return back();
    }
}
