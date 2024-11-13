<?php

namespace Magnetu\Spice\Util;

use Magnetu\Spice\Util\Interface\PhoneSanitizerInterface;

class PhoneSanitizer implements PhoneSanitizerInterface
{

    #[\Override]
    public function sanitize(string $phone): string
    {
        $count = substr_count($phone, '+');
        $phone = preg_replace('/([^0-9])/', '', $phone);
        if ($count > 0) {
            $phone = '+'.$phone;
        }

        return $phone;
    }
}
