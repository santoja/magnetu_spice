<?php

namespace Magnetu\Spice\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;
use Faker\Generator;

abstract class BaseFixture extends Fixture
{
    protected Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function getRandomReference(ResolvableFixtureInterface $fixture): object
    {
        return $this->getReference(
            $fixture->getReferenceString()
            .$this->faker->numberBetween(0, $fixture->getTotalRecords()-1)
        );
    }
}
