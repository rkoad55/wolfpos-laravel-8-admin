<?php 
 
 namespace App\CenteralFacades;
 use App\Models\User;


 class Centeral {

    public static function process(){

        return "testing";

    }
    public static function storeName($id)
    {
        
     $users = User::select('name')->where('id', $id)->get()->toArray();
     //dd($users);
     return $users;

        

    }

 }