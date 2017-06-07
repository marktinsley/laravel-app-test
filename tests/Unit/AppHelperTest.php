<?php

namespace Tests\Unit;

use App\Depender\Contracts\MyInterface;
use App\Depender\MyDependency;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AppHelperTest extends TestCase
{
    public function testResolveWithParameter()
    {
        $concreteDependency = new MyDependency(10);

        $concrete = app(MyInterface::class, [$concreteDependency]);

        $this->assertEquals(10, $concrete->dependency->myValue);
    }
}
