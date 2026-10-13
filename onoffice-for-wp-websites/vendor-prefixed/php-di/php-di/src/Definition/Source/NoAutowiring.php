<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\DI\Definition\Source;

use onOffice\WPlugin\Vendor\DI\Definition\Exception\InvalidDefinition;
use onOffice\WPlugin\Vendor\DI\Definition\ObjectDefinition;

/**
 * Implementation used when autowiring is completely disabled.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class NoAutowiring implements Autowiring
{
    public function autowire(string $name, ?ObjectDefinition $definition = null) : ?ObjectDefinition
    {
        throw new InvalidDefinition(sprintf(
            'Cannot autowire entry "%s" because autowiring is disabled',
            $name
        ));
    }
}
