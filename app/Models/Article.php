<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected  $fillable = ['title' , 'slug' , 'body'];

    public function getRouteKeyName(){
        //کار کند route-model-binding به هر فیلدی که ما می خواهیم تا  id تغییر از 
        return 'slug';
    }
}
