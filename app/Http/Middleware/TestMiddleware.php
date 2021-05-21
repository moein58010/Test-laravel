<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //هندل کردن یا اداره کردن درخواست ها
    public function handle(Request $request, Closure $next)
    {
         return $next($request);

        // if($request->input('title')){
        // dd('Hi moein');
        // }

        // به برنامه ما می فهماند که باید وارد میدلور بعدی بشود و اگه اون میدلور وجود نداشت آنگاه باید وارد آن متد بشود و اجرایش کنی
        // return $next($request);
    }
}
