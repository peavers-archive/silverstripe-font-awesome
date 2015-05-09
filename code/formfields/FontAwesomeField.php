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

        Requirements::combine_files('font-awesome-module.css', array(
            'font-awesome/code/vendor/bootstrap-3.3.4/css/bootstrap.min.css',
            'font-awesome/css/font-awesome.min.css',
            'font-awesome/code/vendor/fontawesome-iconpicker-1.0.0/dist/css/fontawesome-iconpicker.min.css',
            'font-awesome/css/font-awesome-module.css',
        ));

        Requirements::set_force_js_to_bottom(true);
        Requirements::javascript('font-awesome/code/vendor/fontawesome-iconpicker-1.0.0/dist/js/fontawesome-iconpicker.min.js');
        Requirements::javascript('font-awesome/js/font-awesome-module.js');

        Requirements::set_combined_files_folder(ASSETS_DIR . '/_combinedfiles/font-awesome');

        return parent::Field($properties);
    }

    public function validate($validator)
    {
        if(!empty ($this->value) && !preg_match('/^fa-[a-z]+/', $this->value))
        {
            $validator->validationError(
                $this->name,
                _t('FontAwesomeIconPickerField.VALIDFONT', 'Please enter a valid Font Awesome font name format.'),
                'validation',
                false
            );
            return false;
        }
        return true;
    }
}
