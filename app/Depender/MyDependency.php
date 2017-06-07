<?php


namespace App\Depender;

class MyDependency
{
    public $myValue;

    public function __construct($aValue = null)
    {
        $this->myValue = $aValue;
    }
}
