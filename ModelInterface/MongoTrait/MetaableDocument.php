<?php

namespace PHPOrchestra\ModelInterface\MongoTrait;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Trait MetaableDocument
 */
trait MetaableDocument
{
    /**
     * @var string $metaKeywords
     *
     * @MongoDB\Field(type="string")
     */
    protected $metaKeywords;

    /**
     * @var string $metaDescription
     *
     * @MongoDB\Field(type="string")
     */
    protected $metaDescription;

    /**
     * @var boolean metaIndex
     *
     * @MongoDB\Field(type="boolean")
     */
    protected $metaIndex = false;

    /**
     * @var boolean metaFollow
     *
     * @MongoDB\Field(type="boolean")
     */
    protected $metaFollow = false;

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param boolean $index
     */
    public function setMetaIndex($metaIndex)
    {
        $this->metaIndex = $metaIndex;
    }

    /**
     * @return boolean
     */
    public function getMetaIndex()
    {
        return $this->metaIndex;
    }

    /**
     * @param boolean $follow
     */
    public function setMetaFollow($metaFollow)
    {
        $this->metaFollow = $metaFollow;
    }

    /**
     * @return boolean
     */
    public function getMetaFollow()
    {
        return $this->metaFollow;
    }
}
