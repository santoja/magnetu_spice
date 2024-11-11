<?php

namespace Magnetu\Spice\Tests\Unit\Util;

use PHPUnit\Framework\TestCase;

class PhoneSanitizerTest extends TestCase
{
    /**
     * @param string $phone
     * @param string $expected
     * @return void
     * @dataProvider getDataTestSanitizeFunctions
     */
    public function testSanitizeFunctions(string $phone, string $expected)
    {

    }

    public static function getDataTestSanitizeFunctions(): array
    {
        return [
            [
                '+39434-343-44@@@@',
                '+39434343'
            ],
            [
                '23093029302',
                '23093029302'
            ],
            [
                '+993723^23',
                '+99372323'
            ],
            [
                '+2999!29933395',
                '299929933395'
            ],
            // TODO enable this case when we improve the number check
//            [
//                '+44+22330',
//                '+4422330'
//            ],
        ];
    }
}