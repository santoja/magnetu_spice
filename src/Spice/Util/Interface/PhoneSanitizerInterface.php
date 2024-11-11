<?php

namespace Magnetu\Spice\Util\Interface;

interface PhoneSanitizerInterface
{
    public function sanitize(string $phone): string;
}
