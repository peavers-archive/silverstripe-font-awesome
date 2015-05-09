## Synopsis

A simple form field for selecting font-awesome classes in the CMS.

## Features
* The latest version of font-awesome
* Easy to integrate into any project

## Installation

### Composer
Make sure you're not double loading the css/fonts with a theme.

Ideally composer will be used to install this module. 
```composer require "moe/font-awesome:@stable"```

## Usage

A basic working example, and the following to any class you want the field on; 

```php

private static $db = array(
   'Icon'  => 'Varchar',
);

public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.ButtonDetails', array(
            FontAwesomeField::create("Icon", "Font Awesome icon"),
        ));

        return $fields;
    }
```

Then simple include in the template
```html
 <i class="fa $Icon"></i>
```

Alternatively you can just use the font family via CSS.