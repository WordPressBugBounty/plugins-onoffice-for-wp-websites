<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Factory;

use onOffice\WPlugin\Vendor\Location\GeometryInterface;

/**
 * Geometry Factory Interface
 *
 * @author Marcus Jaschen <mjaschen@gmail.com>
 */
interface GeometryFactoryInterface
{
    /**
     * @param string $string
     *
     * @return GeometryInterface
     */
    public static function fromString(string $string);
}
