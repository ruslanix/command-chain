<?php

namespace Ruslanix\CommandChain\CommandUnit;

use Ruslanix\CommandChain\Container\ContextContainer;

interface CommandUnitInterface
{
    public function process(ContextContainer $resultContainer);
}