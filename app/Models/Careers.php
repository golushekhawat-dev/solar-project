<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Careers extends Model
{
    use HasFactory, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'banner_text'
            ]
        ];
    }
    protected $table = 'careers'; // Apni actual table ka naam ensure karo
    protected $fillable = ['banner_img', 'banner_text', 'content','text','long_text','main_img', 'status']; // Apne database wale columns yahan add karo

}
