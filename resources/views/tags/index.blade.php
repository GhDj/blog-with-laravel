@extends('app.layouts')

@section('title')
   Tag: {{ $tag }}
@endsection

@section('nav')
@endsection

@section('header')
    <header class="valign-wrapper">
        <h1 class="blog-header"><strong>Tag: </strong>{{ $tag }}</h1>
    </header>
@endsection

@section('content')



    @foreach($posts as $post)


        <div class="row ">
            <div class="col s12 ">
                <div class="card  hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="{{ url('p/'.$post->slug) }}"><img src="https://static.pexels.com/photos/3847/jetty-landing-stage-sea-sky.jpeg" class="resize"></a>
                        <span class="card-title">{{ $post->title }}</span>
                    </div>
                    <div class="card-content">
                        <p>{{str_limit($post->content, 50)}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('p/'.$post->slug) }}">See more ...</a>
                        <p class="right">By : {{ $post->users[0]->name }}</p>
                    </div>
                </div>
            </div>
        </div>

    @endforeach




    {{ $posts->render() }}

@endsection


