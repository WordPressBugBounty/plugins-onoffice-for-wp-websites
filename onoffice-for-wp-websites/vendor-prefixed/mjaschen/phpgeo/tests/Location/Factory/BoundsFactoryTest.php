<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\Location\Factory;

use InvalidArgumentException;
use onOffice\WPlugin\Vendor\Location\Bearing\BearingEllipsoidal;
use onOffice\WPlugin\Vendor\Location\Bearing\BearingSpherical;
use onOffice\WPlugin\Vendor\Location\Bounds;
use onOffice\WPlugin\Vendor\Location\Coordinate;
use PHPUnit\Framework\TestCase;

class BoundsFactoryTest extends TestCase
{
    public function testIfExpandFromCenterCoordinateWorksAsExpected()
    {
        $startCenter = new Coordinate(52, 13);
        $this->assertEquals(
            new Bounds(
                new Coordinate(52.00063591099075, 12.998967101997957),
                new Coordinate(51.999364079975535, 13.001032898002041)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, 100, new BearingSpherical())
        );
        $this->assertEquals(
            new Bounds(
                new Coordinate(52.00063549793861, 12.998970388437384),
                new Coordinate(51.99936449299343, 13.001029582403508)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, 100, new BearingEllipsoidal())
        );

        $startCenter = new Coordinate(-52, -13);
        $this->assertEquals(
            new Bounds(
                new Coordinate(-51.999364079975535, -13.001032898002041),
                new Coordinate(-52.00063591099075, -12.998967101997957)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, 100, new BearingSpherical())
        );
        $this->assertEquals(
            new Bounds(
                new Coordinate(-51.99936449299343, -13.001029582403508),
                new Coordinate(-52.00063549793861, -12.998970388437384)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, 100, new BearingEllipsoidal())
        );
    }

    public function testIfExpandFromCenterCoordinateWorksWithNegativeDistance()
    {
        $startCenter = new Coordinate(52, 13);
        $this->assertEquals(
            new Bounds(
                new Coordinate(51.999364079975535, 13.001032898002041),
                new Coordinate(52.00063591099075, 12.998967101997957)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, -100, new BearingSpherical())
        );
        $this->assertEquals(
            new Bounds(
                new Coordinate(51.99936449299343, 13.001029582403508),
                new Coordinate(52.00063549793861, 12.998970388437384)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, -100, new BearingEllipsoidal())
        );
    }

    public function testIfExpandFromCenterCoordinateThrowsExceptionOn180meridianWithBearingSpherical()
    {
        $this->expectException(InvalidArgumentException::class);

        $startCenter = new Coordinate(52, 179.999);
        $this->assertEquals(
            new Bounds(
                new Coordinate(52.00063591099075, 12.998967101997957),
                new Coordinate(51.999364079975535, 13.001032898002041)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, 1000, new BearingSpherical())
        );
    }

    public function testIfExpandFromCenterCoordinateWorksOn180meridianWithBearingEllipsoidal()
    {
        $startCenter = new Coordinate(52, 179.999);
        $this->assertEquals(
            new Bounds(
                new Coordinate(52.00635457125255, 179.98870257203671),
                new Coordinate(51.993644521951445, -179.99070548794623)
            ),
            BoundsFactory::expandFromCenterCoordinate($startCenter, 1000, new BearingEllipsoidal())
        );
    }
}
