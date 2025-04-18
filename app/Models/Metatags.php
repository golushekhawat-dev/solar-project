<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metatags extends Model
{
    use HasFactory;

    protected $fillable = ['route_name','meta_title','meta_description', 'meta_keywords', 'status'];
}
