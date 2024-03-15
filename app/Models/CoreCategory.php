<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreCategory extends Model
{
    use HasFactory;
    protected $fillable = ['corecategory_uniqueID','name','thumbnail','color','categories_attached'];
}
