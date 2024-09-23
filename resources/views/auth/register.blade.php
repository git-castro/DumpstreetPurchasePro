@extends("layouts.default")
@section("title", "Register")
@section("content")
    <h1>Register</h1>
    <form method="post" action="{{route("login.post")}}">
        @csrf
        <div>
            <label for="fullname">Personal Information:</label><br>
            <input type="text" id="fullname" name="fullname" placeholder="Full Name" required><br><br>
        </div>
        <div>
            <label for="userrole">User Role:</label><br>
            <input type="radio" id="pofficer" name="pofficer" value="Purchasing Officer">
            <label for="pofficer">Purchasing Officer</label>
            <input type="radio" id="supplier" name="supplier" value="Supplier">
            <label for="supplier">Supplier</label><br><br>
        </div>
        <div>
            <label for="credentials">Credentials:</label><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="password" id="password" name="password" placeholder="Re-type Password" required>
        </div>
        <br>
        <input type="submit" value="Create an Account"> 
        <p>Registered Already? <a href="">Login Here</a><br></p>

    </form>
@endsection