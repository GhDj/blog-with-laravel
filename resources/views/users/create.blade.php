<form action="{{url('backend/users/create')}}" method="post">
    {{ csrf_field() }}
    Name: <input type="text" name="name" ><br>
    Email: <input type="text" name="email" ><br>
    password: <input type="password" name="password"><br>
    Repeat password: <input type="password"><br>


    <br>
    <input type="submit">
</form>