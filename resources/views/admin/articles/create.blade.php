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
            <lable for="body">body :</lable>
            <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button class="btn btn-danger">send</button>
    </form>
@endsection
