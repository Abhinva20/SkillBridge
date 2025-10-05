<!DOCTYPE html>
<html>
<head>
    <title>SkillBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .welcome-box {
            text-align: center;
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .welcome-box h1 {
            margin-bottom: 20px;
        }
        .welcome-box a {
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="welcome-box">
    <h1>Welcome to SkillBridge</h1>
    <p>Connecting students with teachers and courses.</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
</div>

</body>
</html>
