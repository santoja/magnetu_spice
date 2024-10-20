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

    public function getRandomReference(string $reference, int $totalRecords): object
    {
        return $this->getReference(
            $reference
            .$this->faker->numberBetween(0, $totalRecords-1)
        );
    }
}
