@extends('backend.layouts')


@section('title')
    Settings
@endsection

@section('menu-list')
    <li><a href="{{ url('backend') }}">Dashboard</a></li>
    <li><a href="{{ url('backend/post') }}">Posts</a></li>
    <li><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li><a href="{{ url('backend/users') }}">Users</a></li>
    <li class="link-active"><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection

@section('content')
    <h3> Settings</h3>

    <hr>



    <form action="{{ url('backend/settings/save') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Blog title :</label>
            <input type="text" name="blog_title" value="{{ $cfg->blog_title }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Blog description : </label>
            <textarea name="blog_description" class="form-control">{{ $cfg->blog_description }}</textarea>
        </div>
        <div class="form-group">
            <label> Blog logo :</label>
            @if($cfg->blog_logo !== "")
                <img src="{{ url($cfg->blog_logo ) }}" class="img-responsive">
            @else
                no image
            @endif
            <input type="file" name="blog_title" class="form-control">
        </div>

        <div class="form-group">
            <label>Blog header : </label>
            @if($cfg->blog_header_link !== "")
                <img src="{{ url($cfg->blog_header_link) }}" class="img-responsive">
            @else
                no image
            @endif
            <input type="file" name="blog_header" class="form-control">
        </div>
        <div class="form-group">
            <label> Blog status :</label>
            <input type="radio" name="blog_status" value="up" checked>Up
            <input type="radio" name="blog_status" value="down">Down
        </div>
        <div class="form-group">
            <label> Posts per page :</label>
            <!-- TODO: post per page -->
            <input type="text" name="blog_title" value="not yet" class="form-control">
        </div>

        <input type="submit" class="btn btn-success">

    </form>
@endsection