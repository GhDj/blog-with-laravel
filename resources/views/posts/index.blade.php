@extends('backend.layouts')


@section('title')
Posts
@endsection

@section('menu-list')
    <li><a href="{{ url('backend') }}">Dashboard</a></li>
    <li class="link-active"><a href="{{ url('backend/post') }}">Posts</a></li>
    <li><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li><a href="{{ url('backend/users') }}">Users</a></li>
    <li><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection

@section('content')

    <h3> Posts</h3>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('backend/post/create') }}">create</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>post id</th>
                    <th>post title</th>
                    <th>post published</th>
                    <th>post delete/edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <th>{{$post->title}}</th>
                        <th>{{$post->status}}</th>
                        <th>
                            <a href="{{ url('backend/post/delete', $post->id) }}">delete</a>/<a
                                    href="{{ url('backend/post/edit', $post->id) }}">edit</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection