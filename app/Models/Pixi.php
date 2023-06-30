<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pixi extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail_url',
        'name',
        'description',
        'what',
        'how',
    ];
}
