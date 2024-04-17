<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SignupController extends Controller
{
    public function sendIndividualEmail(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|email',
            'next_of_kin' => 'nullable|string',
        ]);

        // Initialize PHPMailer
        $mail = new PHPMailer(true); // Passing `true` enables exceptions

        try {
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
                    <p><strong>Address:</strong> {$validatedData['address']}</p>
                    <p><strong>Mobile Number:</strong> {$validatedData['mobile']}</p>
                    <p><strong>Email:</strong> {$validatedData['email']}</p>
                    <p><strong>Next of Kin or Optional Contact:</strong> {$validatedData['next_of_kin']}</p>
                </body>
                </html>
            ";

            $mail->send();
            return "Thank you for signing up! We will get back to you soon.";
        } catch (Exception $e) {
            return "Failed to send email. Error: {$mail->ErrorInfo}";
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
            'business_name' => 'required|string',
            'business_details' => 'required|string',
            'business_address' => 'required|string',
            'business_phone' => 'required|string',
            'business_email' => 'required|email',
            'business_website' => 'nullable|url',
        ]);

        // Initialize PHPMailer
        $mail = new PHPMailer(true); // Passing `true` enables exceptions

        try {
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
            return "Thank you for signing up! We will get back to you soon.";
        } catch (Exception $e) {
            return "Failed to send email. Error: {$mail->ErrorInfo}";
        }
    }

}
