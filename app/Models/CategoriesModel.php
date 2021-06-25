<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    use HasFactory;
    protected $table ="categories";
    protected $fillable = [
        'user_id',
        'name',  
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function categoriesExtra()
    {
        return $this->belongsTo('App\Models\CategoriesExtraModel');
    }
}
