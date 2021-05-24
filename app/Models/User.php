<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


<<<<<<< HEAD

//    دیتا های آرتیکل های فلان یوزر را بازگردان (رابطه 1 به چند)
public function articles(){

//    hasMany(namemodel::class,'create_articles_table دقیقا کلید خارجی توی آرتیکل ') => یعنی تعداد زیادی آرتیکل وجود دارد
///Article::class => خودمان ازش شی نمی سازیم و اجازه ایجاد کردن یک شی یا کلاس را به هسته لاراول می دهیم
      return $this->hasMany(\App\Models\Article::class);


//    return $this->hasMany(Article::class,'u_i','email');
//    متصل کن 'email' را به  'u_i' این فیلد

=======
<<<<<<< HEAD

//    آرتیکل های فلان یوزر را بازگردان (رابطه 1 به چند)
public function articles(){

//    hasMany(namemodel::class,'create_articles_table دقیقا کلید خارجی توی آرتیکل ') => یعنی تعداد زیادی آرتیکل وجود دارد
//Article::class => خودمان ازش شی نمی سازیم و اجازه ایجاد کردن یک شی یا کلاس را به هسته لاراول می دهیم
//    متصل کن 'email' را به  'u_i' این فیلد
//    return $this->hasMany(Article::class,'u_i','email');
    return $this->hasMany(Article::class);
>>>>>>> eda793ad033d0a0bf031c8bf2be611cf85044580
}





<<<<<<< HEAD
=======
=======
>>>>>>> 18b852b49343c784be70da8c14bf553c1e1eb014
>>>>>>> eda793ad033d0a0bf031c8bf2be611cf85044580
}
