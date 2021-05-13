<?php

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



// HomeController@home   => اسم متد داخل کنترلر@اسم کنترلر
Route::get('/', [HomeController::class, 'home']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);



//  استفاد کردیم get می توان دریافت کرد چون از متد  get تنها توی روت  دیتا را بصورت  
Route::prefix('admin')->namespace('Admin')->group(function() {

    Route::get('/articles' , 'ArticleController@index');


    Route::get('/articles/create' , 'ArticleController@create');
    // Route::get('/articles/create' , [ArticleController::class, 'create']);

    // فرستادن دیتا از فرم بصورت پست به روت
    Route::post('/articles/create' , 'ArticleController@store');
 



    //edit form
    Route::get('/articles/{id}/edit' , 'ArticleController@edit');


    //دریافت داده های ارسال شده ویرایش شده 
    // Route::post('/articles/{id}/edit' , function($id) {
    
        
    // put => باشد و برای ویرایش و آپدیت کردن استفاده می شود method="post"حتما باید 
    Route::put('/articles/{id}/edit' , 'ArticleController@update');


    // استفاده نمی شود برای جلوگیری از هک و نفوذ get هیچ وقت برای پاک کردن از روت 
    // put or post => وجود داشته باشد csrf باعث میشه که برای حذف اطلاعات حتما باید یک 
    Route::delete('/articles/{id}' , 'ArticleController@delete');
}); 