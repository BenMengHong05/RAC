<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;
    protected $table = 'researchs';
    protected $fillable = [
        'image',
        'title',
        'description'
    ];
}
