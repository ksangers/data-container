<?php
/**
 * Copyright MediaCT. All rights reserved.
 * https://www.mediact.nl
 */

namespace Mediact\DataContainer;

/**
 * @deprecated Will be removed in next major version.
 */
interface DataContainerFilterInterface
{
    /**
     * Filter the given container.
     *
     * @param DataContainerInterface $container
     *
     * @return bool
     */
    public function __invoke(DataContainerInterface $container): bool;
}
