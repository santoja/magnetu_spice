<?php

namespace Magnetu\Spice\DataFixtures;

interface ResolvableFixtureInterface
{
    public function getTotalRecords(): string;

    public function getReferenceString(): string;
}
