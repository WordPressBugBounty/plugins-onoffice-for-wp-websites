<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location;

interface GeometryInterface
{
    /**
     * Returns an array containing all assigned points.
     *
     * @return array<Coordinate>
     */
    public function getPoints(): array;
}
