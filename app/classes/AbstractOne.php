<?php

namespace App\Classes;

abstract class AbstractOne
{
    public $hello = "Arif";
    protected $helloOne = "Abdullah";
    public $helloTwo = "Santo";

    public function helloFour()
    {
        echo 'hello four';
    }

    abstract public function helloFive();

}