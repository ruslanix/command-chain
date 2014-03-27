<?php

namespace Ruslanix\CommandChain\Chain;

use Doctrine\Common\Collections\ArrayCollection;

use Ruslanix\CommandChain\Container\ContextContainer;
use Ruslanix\CommandChain\CommandUnit\CommandUnitInterface;

abstract class BaseChain implements ChainInterface
{
    protected
        $commandUnits,
        $contextContainer
    ;

    abstract protected function doProcess();

    public function __construct()
    {
        $this->commandUnits = new ArrayCollection();
        $this->contextContainer = new ContextContainer();
    }

    public function addCommandUnit(CommandUnitInterface $commandUnit)
    {
        $this->commandUnits->add($commandUnit);
    }

    public function getCommandUnits()
    {
        return $this->commandUnits;
    }

    public function getContextContainer()
    {
        return $this->contextContainer;
    }

    public function process()
    {
        $this->doProcess();

        return $this->getContextContainer();
    }
}
