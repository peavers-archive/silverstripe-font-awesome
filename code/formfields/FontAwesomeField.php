<?php

/**
 * Class FontAwesomeField
 */
class FontAwesomeField extends TextField
{
    /**
     * @return string
     */
    public function Type()
    {
        return 'text';
    }

    /**
     * @param array $properties
     *
     * @return mixed
     */
    public function Field($properties = array())
    {
        $this->addExtraClass('form-control icp icp-auto');

        //Libraries
        Requirements::css(FONT_AWESOME_DIR . '/css/lib/bootstrap.min.css');
        Requirements::css(FONT_AWESOME_DIR . '/css/lib/font-awesome.min.css');
        Requirements::css(FONT_AWESOME_DIR . '/css/lib/font-awesome-iconpicker.min.css');
        Requirements::javascript(FONT_AWESOME_DIR . '/js/lib/font-awesome-iconpicker.min.js');

        // Module
        Requirements::css(FONT_AWESOME_DIR . '/css/font-awesome-module.css');
        Requirements::javascript(FONT_AWESOME_DIR . '/js/font-awesome-module.js');

        Requirements::set_force_js_to_bottom(true);

        return parent::Field($properties);
    }

    /**
     * @param $validator
     *
     * @return bool
     */
    public function validate($validator)
    {
        if (!empty ($this->value) && !preg_match('/^fa-[a-z]+/', $this->value)) {
            $validator->validationError(
                $this->name, 'Please enter a valid Font Awesome font name format.', 'validation', false
            );

            return false;
        }

        return true;
    }
}
