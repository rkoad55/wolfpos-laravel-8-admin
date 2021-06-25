<?php 
 namespace App\CenteralFacades\Facades;
 use Illuminate\Support\Facades\Facade;
 class CenteralFacade extends Facade {

    protected static function getFacadeAccessor(){

        return 'centeral';
    }

}