<?php

namespace Ruslanix\CommandChain\Chain;

use Ruslanix\CommandChain\CommandUnit\CommandUnitInterface;

interface ChainInterface
{
    public function addCommandUnit(CommandUnitInterface $parserUnit);
    public function getCommandUnits();
    public function getContextContainer();
    public function process();
}
