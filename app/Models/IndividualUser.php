<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualUser extends Model
{
    protected $fillable = ['name', 'username', 'password', 'address', 'mobile', 'email', 'next_of_kin'];
}
