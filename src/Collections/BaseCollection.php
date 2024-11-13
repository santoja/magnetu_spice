<?php

namespace src\Collections;

use IteratorAggregate;
use Traversable;

abstract class BaseCollection implements IteratorAggregate
{
    public function __construct(protected array $list)
    {
    }

    public function add(object $item): void
    {
        $this->list[] = $item;
    }

    #[\Override] public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->list);
    }

    abstract public function toArray(): array;
}