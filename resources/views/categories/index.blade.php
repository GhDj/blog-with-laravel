<a href="{{ url('backend/categories/create') }}">create</a>
<table>
    <thead>
    <tr>
        <th>Category id</th>
        <th>Category name</th>
        <th>Category slug</th>
        <th>Category description</th>
        <th>Category delete/edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <th>{{$category->id}}</th>
            <th>{{$category->name}}</th>
            <th>{{$category->slug}}</th>
            <th>{{$category->description}}</th>
            <th>
                <a href="{{ url('backend/categories/delete', $category->id) }}">delete</a>/<a href="{{ url('backend/categories/edit', $category->id) }}">edit</a>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>