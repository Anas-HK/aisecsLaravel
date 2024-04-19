<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Sign Up Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("assets/img/hero-carousel/security1.jpg") }}'); /* Background image for business signup */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-form {
            width: 800px; /* Increased width to accommodate two columns */
            padding: 30px;
            background-color: #ffffff; /* White background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .signup-form h2 {
            font-weight: 500;
            margin-bottom: 30px;
        }
        .signup-form button {
            background-color: #444;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            width: 40%; /* Set button width to 50% */
            display: block;
            margin: 0 auto; /* Center the button */
        }

        .signup-form button:hover {
            background-color: #333;
        }

        .signup-separator {
            border: 0;
            height: 5px; /* Set height of the separator */
            background-color: #ccc; /* Grey color */
            margin-bottom: 20px; /* Spacing between separator and button */
            width: 15%;
        }

        @media (max-width: 768px) {
            .signup-separator {
                width: 80%; /* Adjusted width for smaller screens */
            }
        }

        h4 {
            margin-bottom: 30px;
            text-align: center;
        }
        .package-name {
            text-align: center;
            font-weight: bold;
        }

    </style>
</head>
<body>

<div class="signup-form">
    <h2 class="text-center mb-4">Sign Up</h2>
    <hr class = "signup-separator">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" id="package" name="package" class="form-control package-name text-center" value="{{ $packageName }}" readonly>
            </div>
        </div>
    </div>
    <form method="post" action="{{ route('signup.business') }}">
        @csrf <!-- CSRF Protection -->
        <input type="hidden" name="package_name" value="{{ $packageName }}">
        <div class="row">
            <div class="text-center col-md-6">
                <h4>Company CR Details</h4>
                <div class="form-group">
                    <input type="text" name="company_rep_name" class="form-control" placeholder="CR Name and Surname" required="required">
                </div>
                <div class="form-group">
                    <input type="date" name="date_of_birth" class="form-control" required="required" onchange="validateDate(this)">
                </div>
                <div class="form-group">
                    <input type="text" name="position" class="form-control" placeholder="Position in Company" required="required">
                </div>
                <div class="form-group">
                    <input type="tel" name="contact_number" class="form-control" placeholder="Contact Number" required="required">
                </div>
                <div class="form-group">
                    <input type="tel" name="business_number" class="form-control" placeholder="Business Number" required="required">
                </div>
                <div class="form-group">
                    <input type="email" name="company_rep_email" class="form-control" placeholder="CR Email" required="required">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username for Account" required="required">
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-center">Business Details</h4>
                <div class="form-group">
                    <input type="text" name="business_name" class="form-control" placeholder="Business Name" required="required">
                </div>
                <div class="form-group">
                    <input type="text" name="business_details" class="form-control" placeholder="Business Details" required="required">
                </div>
                <div class="form-group">
                    <input type="text" name="business_address" class="form-control" placeholder="Business Address" required="required">
                </div>
                <div class="form-group">
                    <input type="tel" name="business_phone" class="form-control" placeholder="Business Phone" required="required">
                </div>
                <div class="form-group">
                    <input type="email" name="business_email" class="form-control" placeholder="Business Email" required="required">
                </div>
                <div class="form-group">
                    <input type="text" name="business_website" class="form-control" placeholder="Business Website (optional)">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </div>
    </form>
</div>

<script>
    function validateDate(input) {
        var currentDate = new Date();
        var selectedDate = new Date(input.value);

        if (selectedDate > currentDate) {
            input.setCustomValidity('Please select a date in the past.');
        } else {
            input.setCustomValidity('');
        }
    }
</script>

</body>
</html>
