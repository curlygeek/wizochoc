<?php

namespace Honeydukes\Wizochoc\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension 
{
    
    private static $db = [
        'GTMContainerID' => 'Varchar'
    ];

    public function updateCMSFields(FieldList $fields) 
    {
        $gtmIdField = new HTMLEditorField("GTMContainerID", "Google Tag Manager container ID");
        
        $gtmIdField->setDescription('Your GTM container ID will look like this GTM-XXXXXXX.');
        
        $fields->addFieldToTab("Root.Main", $gtmIdField);
    }
}
