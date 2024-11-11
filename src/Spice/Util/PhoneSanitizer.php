<?php

namespace Magnetu\Spice\Util;

use Magnetu\Spice\Util\Interface\PhoneSanitizerInterface;

class PhoneSanitizer implements PhoneSanitizerInterface
{

    #[\Override]
    public function sanitize(string $phone): string
    {
        // TODO change to accept only + on the start of the string
        return preg_replace('/[^a-zA-Z0-9+]/s', '', $phone);
    }
}
