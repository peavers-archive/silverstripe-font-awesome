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

        Requirements::css('font-awesome/css/lib/bootstrap.min.css');
        Requirements::css('font-awesome/css/lib/font-awesome.min.css');
        Requirements::css('font-awesome/code/vendor/fontawesome-iconpicker-1.0.0/dist/css/fontawesome-iconpicker.min.css');
        Requirements::css('font-awesome/css/font-awesome-module.css');

        Requirements::set_force_js_to_bottom(true);
        Requirements::javascript('font-awesome/code/vendor/fontawesome-iconpicker-1.0.0/dist/js/fontawesome-iconpicker.min.js');
        Requirements::javascript('font-awesome/js/font-awesome-module.js');

        return parent::Field($properties);
    }

    /**
     * @param $validator
     *
     * @return bool
     */
    public function validate($validator)
    {
        if(!empty ($this->value) && !preg_match('/^fa-[a-z]+/', $this->value))
        {
            $validator->validationError(
                $this->name, 'Please enter a valid Font Awesome font name format.', 'validation', false
            );
            return false;
        }
        return true;
    }
}
