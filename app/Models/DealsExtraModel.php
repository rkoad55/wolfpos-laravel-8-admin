<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealsExtraModel extends Model
{
    use HasFactory;
    protected $table ="dealsextra";
    protected $fillable = [
        'user_id',
        'deal_id',  
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
