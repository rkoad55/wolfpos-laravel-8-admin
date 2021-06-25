<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealsModel extends Model
{
    use HasFactory;
    protected $table = 'deals';
    //protected $id;
    protected $fillable = [
        'deal_code',
        'user_id',
        'name',
        'availability',
        'description',
        'price',
        'sale_price',
        'products_id',
        
    ];
 
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function categories()
    {
        return $this->belongsTo('App\Models\CategoriesModel','category_id');
    }

    public function addons()
    {
        return $this->hasMany('App\Models\AddonsModel','product_id');
    }
    public function product()
    {
        return $this->hasMany('App\Models\ProductsModel','id');
    }
    public function extra()
    {
        return $this->hasMany('App\Models\DealsExtraModel','deal_id');
    }
    
    
}
