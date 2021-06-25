<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddonsModel extends Model
{
    use HasFactory;
    protected $table ="addons";
    protected $fillable = [
        'user_id',
        'product_id',
        'extra_type_id',  
        'name',  
        'price',  
        'image',  
    ];
    public function extraType()
    {
        return $this->hasMany('App\Models\DealsExtraTypeModel','id','extra_type_id');
    }
}
