<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\IndividualUser;
use App\Models\BusinessUser;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Check the userType to determine which table to query
        if ($user->user_type === 'individual') {
            // If the user is an individual, retrieve data from the IndividualUser table
            $userData = IndividualUser::where('username', $user->username)->first();
        } elseif ($user->user_type === 'business') {
            // If the user is a business, retrieve data from the BusinessUser table
            $userData = BusinessUser::where('username', $user->username)->first();
        } else {
            // Handle the case where userType is neither 'individual' nor 'business'
            // This may indicate an error in your data or authentication logic
            return redirect()->route('message')->with('error', 'Invalid user type');
        }

        // Pass the retrieved user data to the dashboard view
        return view('dashboard', ['userData' => $userData]);
    }
}
