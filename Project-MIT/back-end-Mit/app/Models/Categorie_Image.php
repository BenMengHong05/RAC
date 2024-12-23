<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_Image extends Model
{
    use HasFactory;
    protected $table = 'categories_images';
    public function categorie(){
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
}
