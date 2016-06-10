@extends('backend.layouts')


@section('title')
    Users
@endsection

@section('menu-list')
    <li><a href="{{ url('backend') }}">Dashboard</a></li>
    <li><a href="{{ url('backend/post') }}">Posts</a></li>
    <li><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li class="link-active"><a href="{{ url('backend/users') }}">Users</a></li>
    <li><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection

@section('content')
    <h3> Users</h3>

    <hr>

    <a href="{{ url('backend/users/create') }}">create</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>user id</th>
            <th>user name</th>
            <th>user email</th>
            <th>user delete/edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <th>{{$user->name}}</th>
                <th>{{$user->email}}</th>
                <th>
                    <a href="{{ url('backend/users/delete', $user->id) }}">delete</a>/<a
                            href="{{ url('backend/users/edit', $user->id) }}">edit</a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection