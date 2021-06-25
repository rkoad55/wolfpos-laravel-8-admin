<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealsExtraTypeModel extends Model
{
    use HasFactory;
    protected $table ="deals_extra_type";
    protected $fillable = [
        'id', 
        'name',  
          
    ];
}
