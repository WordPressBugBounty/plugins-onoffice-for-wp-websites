<?php

namespace onOffice\WPlugin\Vendor\AltchaOrg\Altcha;

class VerifySolutionResult
{
    public function __construct(
        public readonly bool $verified,
        public readonly bool $expired = false,
        public readonly ?bool $invalidSignature = null,
        public readonly ?bool $invalidSolution = null,
        public readonly float $time = 0.0,
    ) {
    }
}
