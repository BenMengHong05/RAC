<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function newmits(){
        return $this->hasMany(NewMit::class,'categorie_id');
    }
    public function categories_path()
    {
        return $this->hasMany(Categorie_Path::class, 'categorie_id');
    }
    public function categories_image(){
        return $this->hasMany(Categorie_Image::class , 'categorie_id');

    }

}
