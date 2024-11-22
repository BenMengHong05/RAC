<?php

namespace App\Models;

use App\Models\StudentProfile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Student extends Model
{
    use HasFactory;
    protected $guraded = ["id"];

}
