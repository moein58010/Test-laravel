<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Sluggable;
    use HasFactory;

    protected  $fillable = [ 'title','slug' , 'body'];

//    public function getRouteKeyName(){
//        //کار کند route-model-binding به هر فیلدی که ما می خواهیم تا  id تغییر از
//        return 'slug';
//    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


//    بر اساس آرتیکل، دیتا های یوزرش را هم برگذداند
    public function user(){
//        متعلق هست به فلان یوزر
//        User::class = اسم مدل
<<<<<<< HEAD
//        پیدا کند آرتیکلی که این کاربر ایجاد کرده است
        return $this->belongsTo(\App\Models\User::class);
=======
        return $this->belongsTo(User::class);
>>>>>>> eda793ad033d0a0bf031c8bf2be611cf85044580
    }


}


