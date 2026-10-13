<?php

namespace onOffice\WPlugin\Vendor\AltchaOrg\Altcha;

use onOffice\WPlugin\Vendor\AltchaOrg\Altcha\Algorithm\DeriveKeyInterface;

class VerifySolutionOptions
{
    public function __construct(
        public readonly Payload $payload,
        public readonly DeriveKeyInterface $algorithm,
    ) {
    }
}
