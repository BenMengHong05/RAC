<?php

namespace App\Models;

use App\Http\Controllers\CategoriesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMit extends Model
{
    use HasFactory;
    protected $table = 'newmits';
    protected $fillable = [
        'image',
        'title',
        'description'
        
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class,'categorie_id');
    }


}
