<!-- farakhani master page -->
@extends('layouts.master')

@section('content')
    <h2>All Article</h2>
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
                        <form action="/admin/articles/{{ $article->slug }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>
@endsection