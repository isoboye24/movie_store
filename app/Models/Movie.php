<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // ✅ Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'released',
        'description',
        'image_url',   
    ];

}
