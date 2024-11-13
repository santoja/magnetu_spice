<?php

namespace src\Util\Interface;

interface PhoneSanitizerInterface
{
    public function sanitize(string $phone): string;
}
