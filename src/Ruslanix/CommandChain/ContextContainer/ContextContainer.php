<?php

namespace Ruslanix\CommandChain\ContextContainer;

use Doctrine\Common\Collections\ArrayCollection;

class ContextContainer extends ArrayCollection
{
    public function getOrException($key)
    {
        if (!$this->containsKey($key)) {
            throw new \Exception(sprintf("[ContextContainer] Can't find element with key %s", $key));
        }

        return $this->get($key);
    }
}