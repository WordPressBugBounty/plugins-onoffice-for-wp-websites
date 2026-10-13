<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Processor\Polyline;

use onOffice\WPlugin\Vendor\Location\Polyline;

/**
 * Interface for simplifying a polyline
 *
 * @author Marcus Jaschen <mjaschen@gmail.com>
 */
interface SimplifyInterface
{
    /**
     * Simplifies the given polyline
     *
     * @param Polyline $polyline
     *
     * @return Polyline
     */
    public function simplify(Polyline $polyline): Polyline;
}
