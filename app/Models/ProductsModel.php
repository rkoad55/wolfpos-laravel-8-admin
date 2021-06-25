<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    //protected $id;
    protected $fillable = [
        'product_code',
        'user_id',
        'name',
        'brand',
        'availability',
        'description',
        'price',
        'sale_price',
        'category_id',
        
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function categories()
    {
        return $this->belongsTo('App\Models\CategoriesModel','category_id');
    }

    public function extra()
    {
        return $this->hasMany('App\Models\AddonsModel','product_id');
    }

    public function options()
    {
        return $this->hasMany('App\Models\ProductsExtraModel','product_id');
    }
}
