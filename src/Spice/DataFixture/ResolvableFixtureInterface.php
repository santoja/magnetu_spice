<?php

namespace App\Application\DataFixtures;

interface ResolvableFixtureInterface
{
    public function getTotalRecords(): string;

    public function getReferenceString(int $sequence): string;
}
