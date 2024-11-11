<?php

namespace Magnetu\Spice\Tests\Unit\Util;

use Magnetu\Spice\Util\PhoneSanitizer;
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
        $phoneSanitizer = new PhoneSanitizer();
        $this->assertSame($expected, $phoneSanitizer->sanitize($phone));
    }

    public static function getDataTestSanitizeFunctions(): array
    {
        return [
            [
                '+39434-343-44@@@@',
                '+3943434344'
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
                '+299929933395'
            ],
            [
                '+44+22330',
                '+4422330'
            ],
        ];
    }
}