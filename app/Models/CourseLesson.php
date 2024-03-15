<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLesson extends Model
{
    use HasFactory;
    protected $fillable = ['lesson_uniqueID','course_uniqueID','category_name','name','type','task_uniqueID','media','duration','priority'];
}
