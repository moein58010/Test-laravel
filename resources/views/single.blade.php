@extends('layouts.master')

@section('content')
    <h1 class="my-4">{{ $article->title }}</h1>

    <!-- Blog Post -->

        <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                {{-- نمایش دادن عنوان آرتیکل--}}
                <h2 class="card-title">{{ $article->title }}</h2>
                <p class="card-text">{{ $article->body }}</p>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2020 by


{{--   نمایش دسته بندی ها --}}

                <ul>
                    @foreach($article->categories()->get() as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>



                <a href="#">Start Bootstrap</a>
            </div>
        </div>

@endsection
