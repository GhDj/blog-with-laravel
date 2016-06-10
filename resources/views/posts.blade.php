@extends('app.layouts')

@section('title')
    {{ $data->blog_description }}
@endsection


@section('nav')
    <nav class="st-menu st-effect-3" id="menu-3">
        <h2 class="">Categories:</h2>
        <ul>
            @foreach($categories as $category)
                <li><a class="" href="c/{{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>


        <h2>Tags:</h2>
        <h6>
            @foreach($tags as $tag)
                <a href="t/{{ $tag->slug }}"
                   style="border: 1px solid rgba(255,255,255,0.5); margin: 5px; padding: 5px;   display: inline-block;">{{ $tag->name }}</a>
                ,
            @endforeach
        </h6>
    </nav>

@endsection


@section('header')
    <header class="valign-wrapper">
        <div id="st-trigger-effects" class="trigger">
            <button data-effect="st-effect-3">Push</button>
        </div>
        <h1 class="blog-header">{{ $data->blog_title }}</h1>
    </header>
@endsection
@section('content')

    @foreach($posts as $post)
        <div class="row ">
            <div class="col s12 ">
                <div class="card  hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="{{ url('p/'.$post->slug) }}"><img
                                    src="https://static.pexels.com/photos/3847/jetty-landing-stage-sea-sky.jpeg"
                                    class="resize"></a>
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


