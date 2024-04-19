<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("assets/img/hero-carousel/security1.jpg") }}'); /* Updated background image path */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-form {
            width: 400px;
            padding: 30px;
            background-color: #ffffff; /* Set the background color of the login form */
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .login-form h2 {
            font-weight: 500; /* Set font weight of the heading */
        }
        .login-form button {
            background-color: #444; /* Set the background color of the login button */
            border: none;
        }
        .login-form button:hover {
            background-color: #333; /* Darker color on hover */
        }

        h2 {
            font-size: 34px;
        }
    </style>
</head>
<body>

<div class="login-form">
    <h2 class="text-center mb-4">Login</h2>
    <form method="post" action="{{ route('login') }}">
        @csrf <!-- CSRF Protection -->
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
</div>

</body>
</html>
