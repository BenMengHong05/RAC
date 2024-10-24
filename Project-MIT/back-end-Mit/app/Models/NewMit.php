<?php

namespace App\Models;

use App\Http\Controllers\CategoriesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMit extends Model
{
    use HasFactory;

    public function newmit_categories(){
        return $this->hasOne(Newmit_Categorie::class);
    }
    protected $table = 'newmits';
    protected $fillable = [
        'image',
        'title',
        'description'
    ];
}
