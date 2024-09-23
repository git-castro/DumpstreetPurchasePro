@extends("layouts.default")
@section("title", "Login")
@section("content")
    <h1>Login</h1>
    <form method="post" action="{{route("login.post")}}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            @if ($errors->has('email'))
                {{$errors->first('email')}}
            @endif
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <a href="">Forgot Password?</a><br><br>
            @if ($errors->has('password'))
                {{$errors->first('password')}}
            @endif
        </div>

        <input type="submit" value="Login"> 
        <p>Don't have an Account? <a href="">Register Here</a><br></p>

    </form>
@endsection