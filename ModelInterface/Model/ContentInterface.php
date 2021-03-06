<?php


namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ContentInterface
 */
interface ContentInterface extends ReadContentInterface, StatusableInterface, TimestampableInterface, BlameableInterface, VersionableInterface, SiteLinkableInterface
{
    /**
     * @param ContentAttributeInterface $attribute
     */
    public function addAttribute(ContentAttributeInterface $attribute);

    /**
     * @param ContentAttributeInterface $attribute
     */
    public function removeAttribute(ContentAttributeInterface $attribute);

    /**
     * @param string $contentId
     */
    public function setContentId($contentId);

    /**
     * @return string
     */
    public function getContentId();

    /**
     * @param string $contentType
     */
    public function setContentType($contentType);

    /**
     * @return string
     */
    public function getContentType();

    /**
     * @param int $contentTypeVersion
     */
    public function setContentTypeVersion($contentTypeVersion);

    /**
     * @return int
     */
    public function getContentTypeVersion();

    /**
     * @param boolean $deleted
     */
    public function setDeleted($deleted);

    /**
     * @return boolean
     */
    public function getDeleted();

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * Set siteId
     *
     * @param String $siteId
     */
    public function setSiteId($siteId);
}
