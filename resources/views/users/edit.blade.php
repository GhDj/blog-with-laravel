<form action="{{url('backend/users/update', $user->id)}}" method="post">
    {{ csrf_field() }}
    Name: <input type="text" name="name" value="{{$user->name}}"><br>
    Email: <input type="text" name="email" value="{{$user->email}}"><br>
    password: <input type="password" name="password" value=""><br>
    Repeat password: <input type="password" value=""><br>


    <br>
    <input type="submit">
</form>