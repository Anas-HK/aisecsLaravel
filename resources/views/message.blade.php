<!-- resources/views/message.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("assets/img/hero-carousel/security1.jpg") }}'); /* Updated background image path */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .message-container {
            margin-top: 100px;
            text-align: center;
        }
        .message-heading {
            font-size: 36px;
            color: white;
            margin-bottom: 20px;
        }
        .alert {
            width: 50%;
            margin: 0 auto;
        }
        .redirect-link {
            font-size: 20px;
            color: blue;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="message-container">
        @if(session('success'))
            <h1 class="message-heading">{{ session('success') }}</h1>
        @endif

        @if(session('error'))
            <h1 class="message-heading">{{ session('error') }}</h1>
        @endif

        <a href="/" class="redirect-link">Click here to go back to the homepage</a>
    </div>
</div>

</body>
</html>
