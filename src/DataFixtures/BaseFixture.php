<?php

namespace Magnetu\Spice\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

abstract class BaseFixture extends Fixture
{
    protected Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    protected function getRandomReference(ResolvableFixtureInterface $fixture): object
    {
        return $this->getReference(
            $fixture->getReferenceString()
            . $this->faker->numberBetween(0, $fixture->getTotalRecords() - 1),
            $fixture->getEntityName()
        );
    }

    abstract function generateRecords(ObjectManager $manager,GenerateRecordsParamsInterface $params): array;
}
