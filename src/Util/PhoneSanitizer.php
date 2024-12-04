<?php

namespace Magnetu\Spice\Util;


class PhoneSanitizer
{

    public function sanitize(string $phone, bool $forcePlus = true): string
    {
        $count = substr_count($phone, '+');
        $phone = preg_replace('/([^0-9])/', '', $phone);
        if ($forcePlus || $count > 0) {
            $phone = '+'.$phone;
        }

        return $phone;
    }

}
