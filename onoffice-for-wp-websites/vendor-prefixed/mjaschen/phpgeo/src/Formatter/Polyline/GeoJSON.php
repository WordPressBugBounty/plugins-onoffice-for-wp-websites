<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Formatter\Polyline;

use onOffice\WPlugin\Vendor\Location\Polyline;

/**
 * GeoJSON Polyline Formatter
 *
 * @author Richard Barnes <rbarnes@umn.edu>
 */
class GeoJSON implements FormatterInterface
{
    /**
     * @param Polyline $polyline
     *
     * @return string
     */
    public function format(Polyline $polyline): string
    {
        $points = [];

        foreach ($polyline->getPoints() as $point) {
            $points[] = [$point->getLng(), $point->getLat()];
        }

        return json_encode(
            [
                'type'        => 'LineString',
                'coordinates' => $points,
            ]
        );
    }
}
