<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Factory;

use InvalidArgumentException;
use onOffice\WPlugin\Vendor\Location\Bearing\BearingInterface;
use onOffice\WPlugin\Vendor\Location\Bounds;
use onOffice\WPlugin\Vendor\Location\Coordinate;

/**
 * Bounds Factory
 */
class BoundsFactory
{
    /**
     * Creates a Bounds instance which corners have the given distance from its center.
     *
     * @param Coordinate $center
     * @param float $distance in meters
     * @param BearingInterface $bearing
     * @return Bounds
     * @throws InvalidArgumentException if bounds crosses the 180/-180 degrees meridian.
     */
    public static function expandFromCenterCoordinate(
        Coordinate $center,
        float $distance,
        BearingInterface $bearing
    ): Bounds {
        $northWest = $bearing->calculateDestination($center, 315, $distance);
        $southEast = $bearing->calculateDestination($center, 135, $distance);

        return new Bounds($northWest, $southEast);
    }
}
