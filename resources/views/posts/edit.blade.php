@extends('backend.layouts')

@section('title')
    Edit {{ $post->title }}
@endsection

@section('menu-list')
    <li><a href="{{ url('backend') }}">Dashboard</a></li>
    <li class="link-active"><a href="{{ url('backend/post') }}">Posts</a></li>
    <li><a href="{{ url('backend/categories') }}">Categories</a></li>
    <li><a href="{{ url('backend/users') }}">Users</a></li>
    <li><a href="{{ url('backend/settings') }}">Settings</a></li>
@endsection


@section('content')




    <h3> Edit Post</h3>

    <hr>

    <form action="{{url('backend/post/update', $post->id)}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>title:</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label>slug:</label>
            <input type="text" name="slug" class="form-control" value="{{ $post->slug }}">
        </div>
        <div class="form-group">
            <label>category:</label>
            <select name="category" class="form-control">
                @foreach($categories as $category)
                    @if($category->id === $cate->id)
                        <option selected="selected">{{$category->name}}</option>
                    @else
                        <option>{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>published :</label>
            @if($post->status === "publish")
                <input type="checkbox" name="status" checked>
            @else
                <input type="checkbox" name="status">
            @endif
        </div>

        <div class="form-group">
            <label>Tags: </label>
            <input type="text" id="input-tags3" value="{{ $default_value }}" name="tags[]">
        </div>

        <input type="submit" class="btn btn-success ">


        </div>
        <h4>Body:</h4>
        <div class="row">
            <div class="col-lg-6">
        <textarea id="text-input" oninput="this.editor.update()"
                  rows="60" cols="90" name="content">{{ $post->content }}</textarea>
            </div>
            <div class="col-lg-6">

                <div id="preview"></div>
            </div>
        </div>
    </form>






@endsection



@section('script')
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/js/standalone/selectize.js"></script>
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/css/selectize.min.css"/>
<script src="{{ asset('assets/js/markdown.min.js') }}"></script>

<script>
    var $a;
    var $items1;
    $(function () {
        function Editor(input, preview) {
            this.update = function () {
                preview.innerHTML = markdown.toHTML(input.value);
            };
            input.editor = this;
            this.update();
        }
        var a = function (id) {
            return document.getElementById(id);
        };
        new Editor(a("text-input"), a("preview"));

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
    @endsection