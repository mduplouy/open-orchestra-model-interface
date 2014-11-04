<?php

namespace PHPOrchestra\ModelBundle\Test\Thumbnail\Strategies;

use Phake;
use PHPOrchestra\ModelBundle\Thumbnail\Strategies\ImageToThumbnailManager;

/**
 * Class ImageToThumbnailManagerTest
 */
class ImageToThumbnailManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ImageToThumbnailManager
     */
    protected $manager;

    protected $uploadDir;
    protected $media;

    /**
     * Set up the test
     */
    public function setUp()
    {
        $this->uploadDir = __DIR__.'/upload';
        $this->media = Phake::mock('PHPOrchestra\ModelBundle\Model\MediaInterface');
        $this->manager = new ImageToThumbnailManager($this->uploadDir);
    }

    /**
     * @param string $mimeType
     * @param bool $result
     *
     * @dataProvider provideMimeType
     */
    public function testSupport($mimeType, $result)
    {
        Phake::when($this->media)->getMimeType()->thenReturn($mimeType);

        $this->assertSame($result, $this->manager->support($this->media));
    }

    /**
     * @return array
     */
    public function provideMimeType()
    {
        return array(
            array('application/x-authorware-map', false),
            array('application/pdf', false),
            array('text/plain', false),
            array('audio/it', false),
            array('music/crescendo', false),
            array('image/naplps', true),
            array('image/jpeg', true),
            array('image/jpg', true),
            array('image/png', true),
            array('image/gif', true),
            array('image/svg', true),
            array('video/vnd.vivo', false),
            array('video/x-fli', false),
        );
    }

    /**
     * @param string $fileName
     *
     * @dataProvider provideFileName
     */
    public function testGenerateThumbnailName($fileName)
    {
        Phake::when($this->media)->getFilesystemName()->thenReturn($fileName);

        $this->manager->generateThumbnailName($this->media);

        Phake::verify($this->media)->setThumbnail($fileName);
    }

    /**
     * @return array
     */
    public function provideFileName()
    {
        return array(
            array('test.jpg'),
            array('autre.jpg'),
        );
    }
}