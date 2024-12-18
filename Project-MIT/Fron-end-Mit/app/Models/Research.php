<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;
    protected $table = 'categories_paths';
    public function categories(){
        return $this->belongsTo(Categorie::class, 'categorie_id');

    }
}
