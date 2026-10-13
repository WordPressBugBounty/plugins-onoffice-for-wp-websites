<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Formatter\Polyline;

use onOffice\WPlugin\Vendor\Location\Polyline;

/**
 * Polyline Formatter Interface
 *
 * @author Richard Barnes <rbarnes@umn.edu>
 */
interface FormatterInterface
{
    /**
     * @param Polyline $polyline
     *
     * @return string
     */
    public function format(Polyline $polyline): string;
}
