<?php

namespace Ruslanix\CommandChain\Tests\Chain;

use Ruslanix\CommandChain\Chain\SimpleChain;

class SimpleChainTest extends \PHPUnit_Framework_TestCase
{
    public function testProcess_ShouldCallToEachCommandUnit()
    {
        // given
        $chain = new SimpleChain();

        for($i = 0; $i < 3; $i++){
            $mockCommandUnit = $this->getMockForAbstractClass(
                '\Ruslanix\CommandChain\CommandUnit\BaseCommandUnit'
            );
            $mockCommandUnit->expects($this->once())
                ->method('process')
                ->with($chain->getContextContainer());
            
            $chain->addCommandUnit($mockCommandUnit);
        }

        // when
        $chain->process();
    }
}