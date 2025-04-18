<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Indexs extends Model
{
    use HasFactory;

    protected $table = 'Indexs';
    protected $fillable = ['logoimage', 'address', 'email', 'mobilenumber', 'gstnumber', 'status'];
   
}
