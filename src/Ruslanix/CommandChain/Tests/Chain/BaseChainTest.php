<?php

namespace Ruslanix\CommandChain\Tests\Chain;

class BaseChainTest extends \PHPUnit_Framework_TestCase
{
    public function testProcess_ShouldCallDoProcess()
    {
        // given
        $mockChain = $this->getMockForAbstractClass(
            'Ruslanix\CommandChain\Chain\BaseChain'
        );
        $mockChain->expects($this->once())
            ->method('doProcess');

        // when
        $mockChain->process();
    }
}