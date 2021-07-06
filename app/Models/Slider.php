<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name', 'image', 'caption', 'enabled', 'url'
    ];
}
