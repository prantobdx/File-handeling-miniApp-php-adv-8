<?php

namespace App\Classes;

use App\Classes\AbstractOne;
use App\Classes\InterfaceClass;
use App\Classes\InterfaceExample;
use App\Classes\TraitExample;

class Student extends AbstractOne implements InterfaceClass, InterfaceExample
{

    use TraitExample;

    protected $country = 'Bangladesh';

    public function __construct()
    {
        $this->name = "DIU";
        $this->city = "Savar";
    }

    public function manage()
    {
        // echo $this->country;
        // echo $this->city;
        // echo $this->index();
        // echo "Area name is $this->name & city is $this->city";
        // echo $this->helloFour();
        echo $this->shila();
    }

    public function two()
    {
        echo 'hello two';
    }
    public function three()
    {
        echo 'hello three';
    }
    public function one()
    {
        echo 'hello one';
    }
    public function helloFive()
    {
        echo 'hello five';
    }
}