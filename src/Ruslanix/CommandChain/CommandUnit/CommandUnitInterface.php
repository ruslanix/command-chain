<?php

namespace Ruslanix\CommandChain\CommandUnit;

use Ruslanix\CommandChain\ContextContainer\ContextContainer;

interface CommandUnitInterface
{
    public function process(ContextContainer $resultContainer);
}