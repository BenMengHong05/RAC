<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categorie_Path extends Model
{
    use HasFactory;
    protected $table = 'categories_paths';
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
