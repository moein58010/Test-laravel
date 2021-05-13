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
    <form action="/admin/articles/{{ $article->id }}/edit" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <lable for="title">title :</lable>
            <input type="text" name="title" class="form-control" value="{{ $article->title }}">
        </div>
        <div class="form-group">
            <lable for="body">body :</lable>
            <textarea name="body" cols="30" rows="10" class="form-control">{{ $article->body }}</textarea>
        </div>
        <button class="btn btn-info">update</button>
    </form>
@endsection