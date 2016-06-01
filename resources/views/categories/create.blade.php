<form action="{{ url('backend/categories/create') }}" method="post">
    {{ csrf_field() }}

    name: <input type="text" name="name">
    <br>
    slug: <input type="text" name="slug">
    <br>
    description<input type="text" name="description">
    <br>

    <input type="submit" >
</form>