<?php

namespace onOffice\WPlugin\Vendor\AltchaOrg\Altcha\Algorithm;

use onOffice\WPlugin\Vendor\AltchaOrg\Altcha\ChallengeParameters;
use onOffice\WPlugin\Vendor\AltchaOrg\Altcha\HmacAlgorithm;

class Pbkdf2 implements DeriveKeyInterface
{
    public function __construct(
        private readonly HmacAlgorithm $hmacAlgorithm = HmacAlgorithm::SHA256,
    ) {
    }

    public function getAlgorithmName(): string
    {
        return 'PBKDF2/' . $this->hmacAlgorithm->value;
    }

    public function deriveKey(
        ChallengeParameters $parameters,
        string $salt,
        string $password,
    ): DeriveKeyResult {
        $cost = max(1, $parameters->cost);
        $keyLength = max(0, $parameters->keyLength);

        $derivedKey = hash_pbkdf2(
            $this->hmacAlgorithm->hashAlgo(),
            $password,
            $salt,
            $cost,
            $keyLength,
            true,
        );

        return new DeriveKeyResult($derivedKey);
    }
}
