<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Formatter\Coordinate;

use onOffice\WPlugin\Vendor\Location\Coordinate;

/**
 * Coordinate Formatter Interface
 *
 * @author Marcus Jaschen <mjaschen@gmail.com>
 */
interface FormatterInterface
{
    /**
     * @param Coordinate $coordinate
     *
     * @return string
     */
    public function format(Coordinate $coordinate): string;
}
