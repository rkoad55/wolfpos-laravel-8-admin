<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsExtraModel extends Model
{
    use HasFactory;
    protected $table ="productsextra";
    protected $fillable = [
        'user_id',
        'product_id',  
        'name',  
        'price',  
          
    ];

   
}
