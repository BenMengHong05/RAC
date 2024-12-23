<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function newmits(){
        return $this->hasMany(NewMit::class, 'categorie_id');
    }
    public function educations(){
        return $this->hasMany(Education::class, 'categorie_id');
    }
    public function research(){
        return $this->hasMany(Research::class, 'categorie_id');
    }

    public function category_paths(){
        return $this->hasMany(CategoryPath::class, 'categorie_id');
    }
    public function category_images() {
        return $this->hasMany(CategoryImage::class, 'categorie_id');
    }

}
