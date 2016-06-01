<a href="{{ url('backend/post/create') }}">create</a>

<table>
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
                <a href="{{ url('backend/post/delete', $post->id) }}">delete</a>/<a href="{{ url('backend/post/edit', $post->id) }}">edit</a>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>