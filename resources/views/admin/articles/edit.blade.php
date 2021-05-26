<!-- farakhani master page -->
@extends('layouts.master')

@section('content')
    <h2>Edit Article</h2>


    <!-- any = هر -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- فرستادن دیتا ها به این پست -->
    <form action="/admin/articles/{{ $article->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <lable for="title">title :</lable>
            <input type="text" name="title" class="form-control" value="{{ $article->title }}">
        </div>


        {{--     dd($article->categories()->get())  = دسته بندی های مربوط به این آرتیکل را بر می کرداند  --}}
        {{--     dd($article->categories()->pluck('id'));  = آیدی دسته بندی های مربوط به این آرتیکل را بر می کرداند  --}}
        {{--     dd($article->categories()->pluck('id')->toArray())     تبدیل به آرایه از کالکشن  --}}
        {{--     dd(in_array(4,$article->categories()->pluck('id')->toArray())) = آیا 4 توی این لیست وجود دارد یا نه    --}}
        {{--     in_array($category->id,$article->categories()->pluck('id')->toArray())) ? 'selceted' : ''        =        برگدان و اگه غلط بود، رشته ی خالی برگردان selceted یعنی اگه درست بود، این را          --}}
        {{--  $category->id  =  چون درون یک حلقه است و دسته بندی ها پیمایش می شوند     --}}


        <div class="form-group">
            <lablae for="">category :</lablae>
            {{--  برای ایجاد امکان انتخاب چند تایی = multiple  --}}
            {{--          مشخص می کند که دسته بندی ما آرایه هست و چند تا مقدار را می تواند بر گرداند => name="categories[]  --}}
            <select name="categories[]" class="form-control" multiple>
                {{--                <option value="1">laravel</option>--}}
                {{--                <option value="2">css</option>--}}

                {{--تمام دسته بندی ها را می گیرد = \App\Models\Category::all() --}}
                {{--  as category= با این پیمایش اش می کند --}}
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ in_array($category->id , $article->categories()->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>






        <div class="form-group">
            <lable for="body">body :</lable>
            <textarea name="body" cols="30" rows="10" class="form-control">{{ $article->body }}</textarea>
        </div>
        <button class="btn btn-info">update</button>
    </form>
@endsection
