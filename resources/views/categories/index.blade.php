@extends('backend.layouts')


@section('title')
    Categories
@endsection

@section('menu-list')
    <li><a href="{{ url('backend') }}">Dashboard</a></li>
    <li><a href="{{ url('backend/post') }}">Posts</a></li>
    <li class="link-active"><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li><a href="{{ url('backend/users') }}">Users</a></li>
    <li><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection

@section('content')
    <h3> Categories</h3>

    <hr>
    <a href="{{ url('backend/categories/create') }}">create</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Category id</th>
            <th>Category name</th>
            <th>Category slug</th>
            <th>Category description</th>
            <th>Category delete/edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th>{{$category->id}}</th>
                <th>{{$category->name}}</th>
                <th>{{$category->slug}}</th>
                <th>{{$category->description}}</th>
                <th>
                    <a href="{{ url('backend/categories/delete', $category->id) }}">delete</a>
                    {{--/<a href="{{ url('backend/categories/edit', $category->id) }}">edit</a>--}}
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection