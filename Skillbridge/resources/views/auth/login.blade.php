<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <label>Email</label>
    <input type="email" name="email" required><br>

    <label>Password</label>
    <input type="password" name="password" required><br>

    <label>Login as:</label>
    <select name="role" required>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
    </select><br>

    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
</body>
</html>
