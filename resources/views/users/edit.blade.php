@extends('backend.layouts')

@section('title')
    Edit {{ $user->name }}
@endsection

@section('menu-list')
    <li><a href="{{ url('backend') }}">Dashboard</a></li>
    <li><a href="{{ url('backend/post') }}">Posts</a></li>
    <li><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li class="link-active"><a href="{{ url('backend/users') }}">Users</a></li>
    <li><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection


@section('content')



    <h3> Edit User</h3>

    <hr>
    <form action="{{url('backend/users/update', $user->id)}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        <label>Name: </label><input type="text" name="name" value="{{$user->name}}" class="form-control">
        </div>
        <div class="form-group">
        <label>Email: </label><input type="text" name="email" value="{{$user->email}}" class="form-control">
        </div>
        <div class="form-group">
        <label>password: </label><input type="password" name="password" value="" placeholder="*****************" class="form-control">
        </div>



        <br>
        <input type="submit" class="btn btn-success">
    </form>
@endsection