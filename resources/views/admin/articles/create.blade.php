<!-- farakhani master page -->
@extends('layouts.master')

@section('content')
    <h2>Create Article</h2>


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

    <form action="/admin/articles" method="post">
        @csrf
        <div class="form-group">
            <lable for="title">title :</lable>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <lablae for="">category :</lablae>
{{--  برای ایجاد امکان انتخاب چند تایی = multiple  --}}
{{--          مشخص می کند که دسته بندی ما آرایه هست و چند تا مقدار را می تواند بر گرداند => name="categories[]  --}}
            <select name="categoies[]" class="form-control" multiple>
{{--                <option value="1">laravel</option>--}}
{{--                <option value="2">css</option>--}}

{{--تمام دسته بندی ها را می گیرد = \App\Models\Category::all() --}}
{{--  as category= با این پیمایش اش می کند --}}
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>



        <div class="form-group">
            <lable for="body">body :</lable>
            <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
        </div>



        <button class="btn btn-danger">send</button>
    </form>
@endsection
