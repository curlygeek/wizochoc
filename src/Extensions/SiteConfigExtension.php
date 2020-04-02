<?php

namespace Honeydukes\Wizochoc\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension 
{
    
    private static $db = [
        'GTMContainerID' => 'Varchar'
    ];

    public function updateCMSFields(FieldList $fields) 
    {
        $gtmIdField = new TextField("GTMContainerID", "Google Tag Manager container ID");
        
        $gtmIdField->setDescription('Your GTM container ID will look like this GTM-XXXXXXX.');
        
        $fields->addFieldsToTab('Root.Analytics', [
            $gtmIdField
        ]);
    }
}
