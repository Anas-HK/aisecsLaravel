<?php

namespace App\Http\Controllers;

use App\Models\BusinessUser;
use App\Models\IndividualUser;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SignupController extends Controller
{
    public function sendIndividualEmail(Request $request)
    {
        try {
            // Validate request data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'username' => 'required|string',
                'password' => 'required|string',
                'address' => 'required|string',
                'mobile' => 'required|string',
                'email' => 'required|email',
                'next_of_kin' => 'nullable|string',
            ]);

            // Hash the password
            $hashedPassword = Hash::make($validatedData['password']);

            // Check if the username is already taken
            if (User::where('username', $validatedData['username'])->exists()) {
                return redirect()->route('message')->with('error', 'Username is already taken. Please choose a different one.');
            }

            // Save the data to the database
            $user = new IndividualUser();
            $user->package_name = $request->input('package');;
            $user->name = $validatedData['name'];
            $user->username = $validatedData['username'];
            $user->password = $hashedPassword;
            $user->address = $validatedData['address'];
            $user->mobile = $validatedData['mobile'];
            $user->email = $validatedData['email'];
            $user->next_of_kin = $validatedData['next_of_kin'];
            $user->save();

            // Save the data to the database
            $user = new User();
            $user->username = $validatedData['username'];
            $user->email = $validatedData['email'];
            $user->password = $hashedPassword;
            $user->user_type = 'individual'; // Set user type to Individual
            $user->save();

            // Create new IndividualUser instance and save the data
            // user = IndividualUser::create($validatedData);

            // Initialize PHPMailer
            $mail = new PHPMailer(true); // Passing `true` enables exceptionsy
            // Server settings
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'anas.h.khan2244@gmail.com'; // SMTP username
            $mail->Password = 'hgyxiznoorozmysy'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom($validatedData['email'], $validatedData['name']); // Sender's email address and name
            $mail->addAddress('anas.h.k2244@gmail.com'); // Recipient's email address

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'New Sign Up';
            $mail->Body = "
                <html>
                <head>
                    <title>New Sign Up</title>
                </head>
                <body>
                    <h2>Individual Sign Up Details</h2>
                    <p><strong>Name:</strong> {$validatedData['name']}</p>
                    <p><strong>Package Name:</strong> {$request->input('package')}</p>
                    <p><strong>Address:</strong> {$validatedData['address']}</p>
                    <p><strong>Mobile Number:</strong> {$validatedData['mobile']}</p>
                    <p><strong>Email:</strong> {$validatedData['email']}</p>
                    <p><strong>Next of Kin or Optional Contact:</strong> {$validatedData['next_of_kin']}</p>
                </body>
                </html>
            ";

            $mail->send();
            return redirect()->route('message')->with('success', 'Thank you for signing up! We will get back to you soon.');

        } catch (QueryException $e) {
            // Check if the exception is due to a duplicate entry error (1062)
            if ($e->errorInfo[1] == 1062) {
                // Email already taken, redirect back with error message
                return redirect()->route('message')->with('error', 'Email address is already taken. Please choose a different one.');
            } else {
                // Other database error, redirect back with general error message
                return redirect()->route('message')->with('error', 'Failed to sign up. Please try again later.');
            }
        }
    }
    public function sendBusinessEmail(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'company_rep_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'position' => 'required|string',
            'contact_number' => 'required|string',
            'business_number' => 'required|string',
            'company_rep_email' => 'required|email',
            'username' => 'required|string',
            'business_name' => 'required|string',
            'business_details' => 'required|string',
            'business_address' => 'required|string',
            'business_phone' => 'required|string',
            'business_email' => 'required|email',
            'business_website' => 'nullable|url',
            'password' => 'required|string',
        ]);

        // Hash the password
        $hashedPassword = Hash::make($validatedData['password']);

        // Check if the username is already taken
        if (User::where('username', $validatedData['username'])->exists()) {
            return redirect()->route('message')->with('error', 'Username is already taken. Please choose a different one.');
        }

        try {
            // Save data to the database
            $businessUser = new BusinessUser();
            $businessUser->package_name = $request->input('package_name'); // Retrieve package_name from the request
            $businessUser->company_rep_name = $validatedData['company_rep_name'];
            $businessUser->date_of_birth = $validatedData['date_of_birth'];
            $businessUser->position = $validatedData['position'];
            $businessUser->contact_number = $validatedData['contact_number'];
            $businessUser->business_number = $validatedData['business_number'];
            $businessUser->company_rep_email = $validatedData['company_rep_email'];
            $businessUser->username = $validatedData['username'];
            $businessUser->business_name = $validatedData['business_name'];
            $businessUser->business_details = $validatedData['business_details'];
            $businessUser->business_address = $validatedData['business_address'];
            $businessUser->business_phone = $validatedData['business_phone'];
            $businessUser->business_email = $validatedData['business_email'];
            $businessUser->business_website = $validatedData['business_website'];
            $businessUser->password = $hashedPassword;
            $businessUser->save();

            $user = new User();
            $user->username = $validatedData['username'];
            $user->email = $validatedData['company_rep_email'];
            $user->password = $hashedPassword;
            $user->user_type = 'business'; // Set user type to Individual
            $user->save();

            // Initialize PHPMailer
            $mail = new PHPMailer(true); // Passing `true` enables exceptions
            // Server settings
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'anas.h.khan2244@gmail.com'; // SMTP username
            $mail->Password = 'hgyxiznoorozmysy'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom($validatedData['company_rep_email'], $validatedData['company_rep_name']); // Sender's email address and name
            $mail->addAddress('anas.h.k2244@gmail.com'); // Recipient's email address

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'New Sign Up';
            $mail->Body = "
                <html>
                <head>
                    <title>New Sign Up</title>
                </head>
                <body>
                    <p><strong>Package Name:</strong> {$request->input('package_name')}</p>
                    <h2>Company Representative Details</h2>
                    <p><strong>Name:</strong> {$validatedData['company_rep_name']}</p>
                    <p><strong>Date of Birth:</strong> {$validatedData['date_of_birth']}</p>
                    <p><strong>Position:</strong> {$validatedData['position']}</p>
                    <p><strong>Contact Number:</strong> {$validatedData['contact_number']}</p>
                    <p><strong>Business Number:</strong> {$validatedData['business_number']}</p>
                    <p><strong>Email:</strong> {$validatedData['company_rep_email']}</p>

                    <h2>Business Details</h2>
                    <p><strong>Business Name:</strong> {$validatedData['business_name']}</p>
                    <p><strong>Business Details:</strong> {$validatedData['business_details']}</p>
                    <p><strong>Business Address:</strong> {$validatedData['business_address']}</p>
                    <p><strong>Business Phone:</strong> {$validatedData['business_phone']}</p>
                    <p><strong>Business Email:</strong> {$validatedData['business_email']}</p>
                    <p><strong>Business Website:</strong> {$validatedData['business_website']}</p>
                </body>
                </html>
            ";

            $mail->send();
            return redirect()->route('message')->with('success', 'Thank you for signing up! We will get back to you soon.');
        } catch (QueryException $e) {
            // Check if the exception is due to a duplicate entry error (1062)
            if ($e->errorInfo[1] == 1062) {
                // Email already taken, redirect back with error message
                return redirect()->route('message')->with('error', 'Email address is already taken. Please choose a different one.');
            } else {
                return redirect()->route('message')->with('error', 'Failed to send email. Please try again later.');
            }
        } catch (Exception $e) {
            return redirect()->route('message')->with('error', 'Failed to send email. Please try again later.');
        }
    }

    public function login(Request $request)
    {
        // Validate the login request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate using the default guard
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication successful, redirect to dashboard
            return redirect()->route('dashboard');
        }

        // If authentication fails, redirect back with error message
        return redirect()->route('message')->with('error', 'Invalid username or password');
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('message')->with('success', 'You have been logged out successfully.');
    }
}
