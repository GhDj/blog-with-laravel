<form action="{{url('backend/post/update', $post->id)}}" method="post">
    {{ csrf_field() }}
    title: <input type="text" name="title" value="{{$post->title}}"><br>
    slug: <input type="text" name="slug" value="{{$post->slug}}"><br>
    content: <textarea name="content" cols="50">{{ $post->content }}</textarea><br>
    published:
    @if($post->status === "publish")
        <input type="checkbox" name="status" checked>
    @else
        <input type="checkbox" name="status">
    @endif
    <br>
    category: <select name="category">
        @foreach($categories as $category)
            @if($category->id === $cate->id)
                <option selected="selected">{{$category->name}}</option>

            @else
                <option>{{$category->name}}</option>
            @endif
        @endforeach
    </select>
    <br>
        <input type="text" id="input-tags3" value="{{ $default_value }}" name="tags[]">

    <br>
    <input type="submit">
</form>


<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/js/standalone/selectize.js"></script>
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/css/selectize.min.css"/>
<script>
    var $a;
    var $items1;
    $(function () {

          var data = [];

        @foreach($tags as $tag)
        data.push("{{ $tag->name }}");
        @endforeach
        $items1 = data.map(function (x) {
         return {item: x};
         });
         console.log($items1);

        $a = $('#input-tags3').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: true,
            valueField: 'item',
            labelField: 'item',
            searchField: ['item'],
            options: $items1
        });
    });
</script>