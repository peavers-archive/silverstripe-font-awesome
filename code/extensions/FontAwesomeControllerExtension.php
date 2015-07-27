<?php

/**
 * Class FontAwesomeControllerExtension
 */
class FontAwesomeControllerExtension extends Extension
{
    /**
     * Load the font-awesome css into the template
     */
    public function onBeforeInit()
    {
        Requirements::css(FONT_AWESOME_DIR . '/css/lib/font-awesome.min.css');
    }
}
