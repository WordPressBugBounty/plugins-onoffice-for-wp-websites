<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Direction;

use onOffice\WPlugin\Vendor\Location\Coordinate;

class Direction
{
    public function pointIsNorthOf(Coordinate $point, Coordinate $compareAgainst): bool
    {
        return $point->getLat() > $compareAgainst->getLat();
    }

    public function pointIsSouthOf(Coordinate $point, Coordinate $compareAgainst): bool
    {
        return $point->getLat() < $compareAgainst->getLat();
    }

    public function pointIsEastOf(Coordinate $point, Coordinate $compareAgainst): bool
    {
        return $point->getLng() > $compareAgainst->getLng();
    }

    public function pointIsWestOf(Coordinate $point, Coordinate $compareAgainst): bool
    {
        return $point->getLng() < $compareAgainst->getLng();
    }
}
