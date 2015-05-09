<?php

/**
 * Class FontAwesomeField
 */
class FontAwesomeField extends DropdownField
{
    public function Type()
    {
        return 'dropdown';
    }

    public function __construct($name, $title = null, $source = array(), $value = '', $form = null, $emptyString = null)
    {
        parent::__construct($name, $title, $source, $value, $form, $emptyString);
        $this->setSource(FontAwesome::getIcons());
        $this->setTitle("Font Awesome icon");
        $this->setDescription('<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">List of icons available here</a>');
    }
}
