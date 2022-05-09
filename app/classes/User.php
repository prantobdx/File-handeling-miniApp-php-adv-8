<?php

namespace App\Classes;

class User
{
    protected $name = 'Mirpur';
    protected $city = 'Dhaka';

    public function index()
    {
        echo "Area name is $this->name & city is $this->city";
    }

}