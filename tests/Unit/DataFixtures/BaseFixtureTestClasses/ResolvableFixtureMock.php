<?php

namespace Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use src\DataFixtures\ResolvableFixtureInterface;

class ResolvableFixtureMock extends Fixture implements ResolvableFixtureInterface
{

    public const string TEST_REFERENCE = 'test_reference';

    #[\Override] public function getTotalRecords(): int
    {
        return 1;
    }

    #[\Override] public function getReferenceString(): string
    {
        return self::TEST_REFERENCE;
    }

    #[\Override] public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
    }
}