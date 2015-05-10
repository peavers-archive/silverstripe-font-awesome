<?php

/**
 * Class FASettings
 */
class FASettings extends DataExtension
{
    private static $db = array(
        'UseCDN'      => 'boolean(1)',
        'UseThemeCSS' => 'boolean(1)',
    );

    private static $defaults = array(
        'UseCDN'      => false,
        'UseThemeCSS' => false,
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.FontAwesome', array(

            OptionsetField::create('UseThemeCSS', 'Theme dir font-awesome.css?')
                ->setDescription('You may want to use font-awesome.css from your theme directory')
                ->setSource(array(
                    true  => 'Yes',
                    false => 'No'
                )),

            OptionsetField::create('UseCDN', 'CDN for loading frontend assets?')
                ->setDescription('Depending on hosting, your viewers may or may not get better performance using a CDN')
                ->setSource(array(
                    true  => 'Yes',
                    false => 'No'
                ))
        ));
    }
}