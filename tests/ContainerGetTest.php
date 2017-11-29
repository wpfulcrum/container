<?php

namespace Fulcrum\Container\Tests;

use Fulcrum\Container\DIContainer;

class ContainerGetTest extends \PHPUnit_Framework_TestCase
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
