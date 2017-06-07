<?php

namespace App\Depender;

use App\Depender\Contracts\MyInterface;

class Service implements MyInterface
{
    /**
     * @var MyDependency
     */
    public $dependency;

    public function __construct(MyDependency $myDependency)
    {
        $this->dependency = $myDependency;
    }
}