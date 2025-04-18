<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reqforms extends Model
{
    use HasFactory;

    protected $table = 'reqforms'; // Apni actual table ka naam ensure karo
    protected $fillable = ['fname', 'lname', 'email','address','solar_req','image', 'status']; // Apne database wale columns yahan add karo

}
