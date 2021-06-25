<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUserModel extends Model
{
    use HasFactory;
    protected $table ="app_users";
    protected $fillable = [
        'user_id',
        'name',  
    ];
}
