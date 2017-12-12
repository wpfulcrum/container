<?php

namespace Fulcrum\Tests\Unit\Container;

use Fulcrum\Container\DIContainer;
use Fulcrum\Tests\Unit\UnitTestCase;

class ContainerGetTest extends UnitTestCase
{
    public function testGet()
    {
        $initialParameters = [
            'foo' => 'Hello World',
            'bar' => 10,
            'baz' => 'Fulcrum',
        ];
        $container         = new DIContainer($initialParameters);

        foreach ($initialParameters as $uniqueId => $value) {
            $this->assertEquals($value, $container->get($uniqueId));
        }
    }
}
