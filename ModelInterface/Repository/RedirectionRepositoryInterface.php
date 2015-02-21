<?php

namespace OpenOrchestra\ModelInterface\Repository;
use OpenOrchestra\ModelInterface\Model\RedirectionInterface;

/**
 * Interface RedirectionRepositoryInterface
 */
interface RedirectionRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string $id
     *
     * @return RedirectionInterface
     */
    public function find($id);
}
