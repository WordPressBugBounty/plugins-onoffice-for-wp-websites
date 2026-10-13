<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Formatter\Polygon;

use onOffice\WPlugin\Vendor\Location\Polygon;

/**
 * Polygon Formatter Interface
 *
 * @author Marcus Jaschen <mjaschen@gmail.com>
 * @author Richard Barnes <rbarnes@umn.edu>
 */
interface FormatterInterface
{
    /**
     * @param Polygon $polygon
     *
     * @return string
     */
    public function format(Polygon $polygon): string;
}
