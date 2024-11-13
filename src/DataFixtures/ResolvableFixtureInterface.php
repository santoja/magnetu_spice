<?php

namespace src\DataFixtures;

interface ResolvableFixtureInterface
{
    public function getTotalRecords(): int;

    public function getReferenceString(): string;
}
