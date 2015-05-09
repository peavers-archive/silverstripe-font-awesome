<?php

/**
 * Class FontAwesomeField
 */
class FontAwesomeField extends TextField
{
    public function Type()
    {
        return 'text';
    }

    public function Field($properties = array())
    {
        $this->addExtraClass('form-control icp icp-auto');

        Requirements::css('font-awesome/code/vendor/bootstrap-3.3.4/css/bootstrap.min.css');
        Requirements::css('font-awesome/css/font-awesome.min.css');
        Requirements::css('font-awesome/code/vendor/fontawesome-iconpicker-1.0.0/dist/css/fontawesome-iconpicker.min.css');
        Requirements::css('font-awesome/css/font-awesome-module.css');

        Requirements::set_force_js_to_bottom(true);
        Requirements::javascript('font-awesome/js/font-awesome-module.js');
        Requirements::javascript('font-awesome/code/vendor/fontawesome-iconpicker-1.0.0/dist/js/fontawesome-iconpicker.min.js');

        return parent::Field($properties);
    }
}
