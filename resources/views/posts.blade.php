<div style="border:1px solid; padding: 5px; margin: 5px;">
<h1>Category:</h1>
<ul>
    @foreach($categories as $category)
        <li><a href="c/{{ $category->slug }}">{{ $category->name }}</a></li>
    @endforeach
</ul>

</div>


<div style="border:1px solid; padding: 5px; margin: 5px;">
    <h1>Tags:</h1>
    <ul>
        @foreach($tags as $tag)
            <li><a href="t/{{ $tag->slug }}">{{ $tag->name }}</a></li>
        @endforeach
    </ul>

</div>


@foreach($posts as $post)


    <div style="border:1px solid; padding: 5px; margin: 5px;">
        <h1><a href="p/{{ $post->slug }}">{{ $post->title }}</a> <samp>:
                @foreach($post->tags as $tag)
                    <a href="t/{{ $tag->slug }}">{{ $tag->name }}</a>,
                @endforeach

            </samp>
        <strong>{{ $post->users[0]->name }}</strong><br>
        </h1>
        {{str_limit($post->content, 25)}}

    </div>


@endforeach


{{ $posts->render() }}



<style type="text/css">
    li {
        display:inline;
        margin-right: 20px;
    }
</style>