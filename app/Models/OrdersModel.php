<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class OrdersModel extends Model

{

    use HasFactory;

    protected $table = 'orders';

    //protected $id;

    protected $fillable = [
        'extra_for_allvariants',

        'product_id',

        'store_id',

        'name',

        'price',

        'options',

        'amountBase',

        'amountCashback',

        'amountGratuity',

        'amountTotal',
        'applicationId',
        'applicationLabel',
        'authCode',
        'cardSchemeName',
        'cardholderVerificationMethod',
        'currency',
        'dateOfExpiry',
        'dateOfStart',
        'location',
        'notifications',
        'paymentMethod',
        'primaryAccountNumber',
        'primaryAccountNumberSequence',
        'transactionId',
        'transactionNumber',
        'transactionResult',
        'userMessage',
        'transactionTime',
        'transactionType',
        

        

    ];



    public function user()

    {

        return $this->belongsTo('App\Models\User','store_id','id');

    }

    public function categories()

    {

        return $this->belongsTo('App\Models\CategoriesModel','category_id');

    }



    public function addons()

    {

        return $this->hasMany('App\Models\AddonsModel','product_id');

    }

    

}

