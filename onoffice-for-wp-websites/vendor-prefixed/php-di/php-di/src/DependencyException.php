<?php

declare(strict_types=1);

namespace onOffice\WPlugin\Vendor\DI;

use onOffice\WPlugin\Vendor\Psr\Container\ContainerExceptionInterface;

/**
 * Exception for the Container.
 */
class DependencyException extends \Exception implements ContainerExceptionInterface
{
}
