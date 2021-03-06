<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\ThemeInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ThemeEvent
 */
class ThemeEvent extends Event
{
    protected $theme;

    /**
     * @param ThemeInterface $theme
     */
    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return ThemeInterface
     */
    public function getTheme()
    {
        return $this->theme;
    }
}
