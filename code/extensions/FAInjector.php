<?php

/**
 * Class FAInjector
 */
class FAInjector extends Extension
{
    public function onBeforeInit()
    {
        Requirements::css("font-awesome/css/font-awesome.min.css");
    }
}