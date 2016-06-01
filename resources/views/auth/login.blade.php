<form role="form" method="POST" action="{{ url('backend/login') }}">
    {{ csrf_field() }}

    E-Mail Address:
    <input id="email" type="email" name="email" value="{{ old('email') }}">
    @if ($errors->has('email'))
        <strong>{{ $errors->first('email') }}</strong>
    @endif

    <br>

    Password:
    <input id="password" type="password" name="password">
    @if ($errors->has('password'))
        <strong>{{ $errors->first('password') }}</strong>
    @endif

    <br>

    <input type="checkbox" name="remember"> Remember Me

    <br>

    <button type="submit">Login</button>
    <br>
    <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>

</form>
