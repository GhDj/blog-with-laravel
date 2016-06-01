<a href="{{ url('backend/users/create') }}">create</a>
<table>
    <thead>
    <tr>
        <th>user id</th>
        <th>user name</th>
        <th>user email</th>
        <th>user delete/edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th>{{$user->id}}</th>
            <th>{{$user->name}}</th>
            <th>{{$user->email}}</th>
            <th>
                <a href="{{ url('backend/users/delete', $user->id) }}">delete</a>/<a href="{{ url('backend/users/edit', $user->id) }}">edit</a>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>