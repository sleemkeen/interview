<?php


namespace App\Http\Helper;
use App\User;
use Validator;

class Validate  {
    private $validator;
    private $user;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validateuser($data)
    {
       $datavalidate =  $this->validator::make($data, [
                "email" => "required|email",
                "name" => "required|min:6",
                "role" => "required",

            ]);

        return $datavalidate;


    }

     public function validateproduct($data)
    {
       $datavalidate =  $this->validator::make($data, [
                "productname" => "required",
               

            ]);

        return $datavalidate;


    }

      public function validatestore($data)
    {
       $datavalidate =  $this->validator::make($data, [
                "storename" => "required",
                "location" => "required",

            ]);

        return $datavalidate;


    }
 
    
}    