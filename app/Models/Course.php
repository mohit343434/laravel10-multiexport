<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_uniqueID','corecategory_uniqueID','trainer_uniqueID','name','thumbnail','previewVideo','description','duration','price','currency'];
}
