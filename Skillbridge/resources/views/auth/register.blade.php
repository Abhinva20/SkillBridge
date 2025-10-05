<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
@if($errors->any())
    <div style="color:red;">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('register.submit') }}">
    @csrf
    <label>Name</label>
    <input type="text" name="name" required><br>

    <label>Email</label>
    <input type="email" name="email" required><br>

    <label>Password</label>
    <input type="password" name="password" required><br>

    <label>Confirm Password</label>
    <input type="password" name="password_confirmation" required><br>

    <label>Register as:</label>
    <select name="role" required>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
    </select><br>

    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
</body>
</html>
