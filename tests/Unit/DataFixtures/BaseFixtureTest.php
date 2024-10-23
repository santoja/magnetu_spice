<?php
namespace Magnetu\Spice\Tests\Unit\DataFixtures;

use Doctrine\Common\DataFixtures\ReferenceRepository;
use Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses\NotRealEntity;
use Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses\OrdinaryFixture;
use Magnetu\Spice\Tests\Unit\DataFixtures\BaseFixtureTestClasses\ResolvableFixtureMock;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

class BaseFixtureTest extends TestCase
{
    use ProphecyTrait;

    public function testGetRandomReference(): void {
        $referenceRepositoryMock = $this->prophesize(ReferenceRepository::class);
        $notRealEntity = new NotRealEntity();

        $referenceRepositoryMock->getReference(ResolvableFixtureMock::TEST_REFERENCE . 0, null)
            ->shouldBeCalledOnce()->willReturn($notRealEntity);

        $resolvableFixture = new ResolvableFixtureMock();
        $ordinaryBaseFixture = new OrdinaryFixture();
        $ordinaryBaseFixture->setReferenceRepository($referenceRepositoryMock->reveal());

        $result = $ordinaryBaseFixture->getTestRandom($resolvableFixture);
        $this->assertSame($notRealEntity, $result);
    }

}