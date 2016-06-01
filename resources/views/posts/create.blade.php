<form action="{{ url('backend/post/create') }}" method="post">
    {{ csrf_field() }}

    title: <input type="text" name="title">
    <br>
    slug: <input type="text" name="slug">
    <br>
    body: <textarea name="content"></textarea>
    <br>
    category: <select name="category">
        @foreach($categories as $category)
            <option>{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    published : <input type="checkbox" name="published">
    <br>
    <input type="text" id="input-tags3" value="" name="tags[]">
    <br>
    <input type="submit" >
</form>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/js/standalone/selectize.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/css/selectize.min.css" />
<script>
    $(function() {

        var data = [];

        @foreach($tags as $tag)
            data.push("{{ $tag->name }}");
        @endforeach
        var items = data.map(function(x) { return { item: x }; });
        console.log(items);


        $('#input-tags3').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    item: input,
                }
            },
            valueField: 'item',
            labelField: 'item',
            searchField: 'item',
            options: items
        });
    });
</script>