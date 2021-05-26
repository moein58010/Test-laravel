<!-- farakhani master page -->
@extends('layouts.master')

@section('content')

    <div class="w-full h-auto flex row p-3">
        <div class="w-24 h-24"><h2>All Article</h2></div>
        <div class="w-24 h-24 mt-1 ml-3"><a href="/admin/articles/create" class="btn btn-success">create</a></div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>

            <!-- پاس بده foreach تک تک آرتیکل ها را به  -->
            @foreach($articles as $article)
                <!-- <tr>
                    <td>1</td>
                    <td>this is article 1</td>
                    <td><a href="#" class="btn btn-danger">delete</a></td>
                </tr> -->

                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        <form action="/admin/articles/{{ $article->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/admin/articles/{{ $article->id }}/edit" class="btn btn-primary">edit</a>
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>
@endsection
