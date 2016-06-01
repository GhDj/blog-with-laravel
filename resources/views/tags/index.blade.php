@foreach($posts as $post)


    <div style="border:1px solid; padding: 5px; margin: 5px;">
        <h2><a href="p/{{ $post->slug }}">{{ $post->title }}</a></h2>
        {{str_limit($post->content, 25)}}

    </div>


@endforeach




{{ $posts->render() }}