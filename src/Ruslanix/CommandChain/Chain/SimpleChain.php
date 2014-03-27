<?php

namespace Ruslanix\CommandChain\Chain;

class SimpleChain extends BaseChain
{
    protected function doProcess()
    {
        foreach($this->getCommandUnits() as $commandUnit){
            $commandUnit->process($this->getContextContainer());
        }
    }
}
