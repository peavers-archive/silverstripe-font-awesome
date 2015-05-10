<?php

/**
 * Class FASettings
 */
class FASettings extends DataExtension
{
    private static $db = array(
        'UseCDN' => 'boolean(1)'
    );

    private static $defaults = array(
        'UseCDN' => 'No'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.FontAwesome', array(
            OptionsetField::create('UseCDN', 'CDN for loading frontend assets?')
                ->setDescription('Depending on hosting, your viewers may or may not get better performance using a CDN')
                ->setSource(array(
                    true  => 'Yes',
                    false => 'No'
                ))
        ));
    }
}