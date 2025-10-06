<h2>Admin Login</h2>
<form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
    <p>Don’t have an account? <a href="{{ route('admin.register') }}">Register</a></p>
</form>
