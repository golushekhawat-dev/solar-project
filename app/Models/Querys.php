<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Querys extends Model
{
  use HasFactory;
    protected $table = 'querys';
    protected $fillable = ['fname','email','address','mobilenumber','image','house_size','roof_type','light_avg','monthly_bill','battery_backup','solar_type','status'];
}
