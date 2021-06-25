<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesExtraModel extends Model
{
    use HasFactory;
    protected $table ="categoriesextra";
    protected $fillable = [
        'user_id',
        'category_id',  
        'name',  
        'price',  
        'image',  
    ];
}
