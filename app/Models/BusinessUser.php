<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessUser extends Model
{
    use HasFactory;
    protected $fillable = ['company_rep_name', 'date_of_birth', 'position', 'contact_number', 'business_number', 'company_rep_email', 'username', 'business_name', 'business_details', 'business_address', 'business_phone', 'business_email', 'business_website', 'password'];
}
