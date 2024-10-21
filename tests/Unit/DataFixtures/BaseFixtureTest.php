<?php
namespace Magnetu\Spice\Tests\Unit\DataFixtures;

use Doctrine\Common\DataFixtures\ReferenceRepository;
use Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses\NotRealEntity;
use Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses\OrdinaryFixture;
use Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses\ResolvableFixtureMock;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;
use Psr\Container\ContainerInterface;

class BaseFixtureTest extends TestCase
{
    use ProphecyTrait;

    public function testGetRandomReference(): void {
        $referenceRepository = $this->prophesize(ReferenceRepository::class);
        $notRealEntity = new NotRealEntity();

        $referenceRepository->getReference(ResolvableFixtureMock::TEST_REFERENCE . 0, null)->shouldBeCalledOnce()->willReturn($notRealEntity);


        $resolvableFixture = new ResolvableFixtureMock();
        $ordinaryBaseFixture = new OrdinaryFixture();
        $resolvableFixture->setReferenceRepository($referenceRepository->reveal());

        $result = $ordinaryBaseFixture->getTestRandom($resolvableFixture);
        $this->assertSame($notRealEntity, $result);
    }

}