<?php

namespace Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses;

use Doctrine\Persistence\ObjectManager;
use Magnetu\Spice\DataFixtures\BaseFixture;

class OrdinaryFixture extends BaseFixture
{

    #[\Override] public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
    }

    public function getTestRandom(ResolvableFixtureMock $fixtureMock): NotRealEntity
    {
        return $this->getRandomReference($fixtureMock);
    }
}