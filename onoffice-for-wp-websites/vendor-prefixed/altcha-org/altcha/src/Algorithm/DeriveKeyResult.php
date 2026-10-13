<?php

namespace onOffice\WPlugin\Vendor\AltchaOrg\Altcha\Algorithm;

use onOffice\WPlugin\Vendor\AltchaOrg\Altcha\ChallengeParameters;

class DeriveKeyResult
{
    public function __construct(
        public readonly string $derivedKey,
        public readonly ?ChallengeParameters $parameterOverrides = null,
    ) {
    }
}
