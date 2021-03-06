<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface VersionnableInterface
 *
 * @deprecated Use VersionableInterface instead, will be removed in 0.2.3
 */
interface VersionnableInterface extends VersionableInterface
{
    /**
     * @param int $version
     */
    public function setVersion($version);

    /**
     * @return int
     */
    public function getVersion();
}
