<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newmit_Categorie extends Model
{
    use HasFactory;
    protected $table = 'newmit_categories';
    protected $fillable = [
        'name'
    ];
}
