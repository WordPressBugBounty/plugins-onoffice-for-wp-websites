<?php

namespace onOffice\WPlugin\Vendor\AltchaOrg\Altcha\Algorithm;

use onOffice\WPlugin\Vendor\AltchaOrg\Altcha\ChallengeParameters;

interface DeriveKeyInterface
{
    public function getAlgorithmName(): string;

    public function deriveKey(
        ChallengeParameters $parameters,
        string $salt,
        string $password,
    ): DeriveKeyResult;
}
