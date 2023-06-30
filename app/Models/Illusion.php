<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'name',
        'description',
        'what',
        'how',
    ];
}
