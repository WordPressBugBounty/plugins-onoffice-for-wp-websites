<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Formatter\Coordinate;

use onOffice\WPlugin\Vendor\Location\Coordinate;

/**
 * GeoJSON Coordinate Formatter
 *
 * @author Marcus Jaschen <mjaschen@gmail.com>
 */
class GeoJSON implements FormatterInterface
{
    /**
     * @param Coordinate $coordinate
     *
     * @return string
     */
    public function format(Coordinate $coordinate): string
    {
        return json_encode(
            [
                'type'        => 'Point',
                'coordinates' => [
                    $coordinate->getLng(),
                    $coordinate->getLat(),
                ],
            ]
        );
    }
}
