<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMit extends Model
{
    use HasFactory;
    protected $table = 'newmits';
    public function categories(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
