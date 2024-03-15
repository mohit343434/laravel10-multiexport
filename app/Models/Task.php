<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['task_uniqueID','category_name','task_name','task_type','difficultly_level','file_attached','link_url','skipped_time','question_type','point_type'];
}
