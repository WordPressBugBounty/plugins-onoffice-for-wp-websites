<?php

namespace onOffice\WPlugin\Vendor\AltchaOrg\Altcha\V1;

use onOffice\WPlugin\Vendor\AltchaOrg\Altcha\V1\Hasher\Algorithm;

class Payload
{
    public function __construct(
        public readonly Algorithm $algorithm,
        public readonly string $challenge,
        public readonly int $number,
        public readonly string $salt,
        public readonly string $signature,
    ) {
    }
}
