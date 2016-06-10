@extends('backend.layouts')


@section('title')
    Create Category
@endsection

@section('menu-list')
    <li><a href="{{ url('backend') }}">Dashboard</a></li>
    <li><a href="{{ url('backend/post') }}">Posts</a></li>
    <li class="link-active"><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li><a href="{{ url('backend/users') }}">Users</a></li>
    <li><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection

@section('content')
    <h3> Create Category</h3>

    <hr>
    <form action="{{ url('backend/categories/create') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label> name: </label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>slug:</label>
            <input type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="text" name="description" class="form-control">
        </div>

        <input type="submit" class="btn btn-success">
    </form>


@endsection