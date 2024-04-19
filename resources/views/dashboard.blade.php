<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Dashboard</h1>

    @if(Auth::user()->user_type === 'individual')
        <h2>Individual User Data</h2>
        <p><strong>Name:</strong> {{ $userData->name }}</p>
        <p><strong>Username:</strong> {{ $userData->username }}</p>
        <!-- Add more fields as needed -->
    @elseif(Auth::user()->user_type === 'business')
        <h2>Business User Data</h2>
        <p><strong>Business Name:</strong> {{ $userData->business_name }}</p>
        <p><strong>Business Address:</strong> {{ $userData->business_address }}</p>
        <!-- Add more fields as needed -->
    @else
        <p>Error: Invalid user type</p>
    @endif

    <p><a href="{{ route('logout') }}" class="btn btn-primary">Logout</a></p>
</div>

</body>
</html>
