<?php

namespace AnthonyDee\MakeControllerExpanded\Tests;

use Orchestra\Testbench\TestCase;
use AnthonyDee\MakeControllerExpanded\MakeControllerExpandedServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MakeControllerExpandedServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
