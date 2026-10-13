<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\DI\Definition\Source;

use onOffice\WPlugin\Vendor\DI\Definition\Exception\InvalidDefinition;
use onOffice\WPlugin\Vendor\DI\Definition\ObjectDefinition;

/**
 * Source of definitions for entries of the container.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
interface Autowiring
{
    /**
     * Autowire the given definition.
     *
     * @throws InvalidDefinition An invalid definition was found.
     */
    public function autowire(string $name, ?ObjectDefinition $definition = null) : ?ObjectDefinition;
}
