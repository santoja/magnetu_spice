<?php

namespace Magnetu\Spice\DataFixtures;

interface ResolvableFixtureInterface
{
    public function getTotalRecords(): int;

    public function getReferenceString(): string;
}
