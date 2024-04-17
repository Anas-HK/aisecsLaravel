<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
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
        .signup-form {
            width: 400px;
            padding: 30px;
            background-color: #ffffff; /* Set the background color of the signup form */
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .signup-form h2 {
            font-weight: 500; /* Set font weight of the heading */
        }
        .signup-form button {
            background-color: #444; /* Set the background color of the signup button */
            border: none;
        }
        .signup-form button:hover {
            background-color: #333; /* Darker color on hover */
        }

        h2 {
            font-size: 34px;
        }
    </style>
</head>
<body>

<div class="signup-form">
    <h2 class="text-center mb-4">Sign Up</h2>
    <form method="post" action="{{ route('signup.individual') }}">
        @csrf <!-- CSRF Protection -->
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name and Surname" required="required">
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="Address" required="required">
        </div>
        <div class="form-group">
            <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" required="required">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
        </div>
        <div class="form-group">
            <input type="text" name="next_of_kin" class="form-control" placeholder="Next of Kin or Optional Contact">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </div>
    </form>
</div>

</body>
</html>
