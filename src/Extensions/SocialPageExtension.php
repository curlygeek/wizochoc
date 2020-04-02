<?php

namespace Honeydukes\Wizochoc\Extensions;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\FieldType\DBEnum;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\DropdownField;

class SocialPageExtension extends DataExtension
{

    private static $db = [
        "SocialMediaTitle" => "Text",
        "SocialMediaDescription" => "Text",
        "TwitterCardType" => 'Enum("Summary, Summary with large image, App, Player")'
    ];
    
    
    private static $has_one = [
        "SocialMediaImage" => Image::class
    ];    
 
    public function updateCMSFields(FieldList $fields) 
    {
        
        $SocialMediaTitle= TextField::create(
            "SocialMediaTitle", "Social media title" , $this->owner->SocialMediaTitle
        )->setDescription('Set the title to show in social media posts. If left blank, the page name will be used');

        
        $SocialMediaDescription= TextField::create(
            "SocialMediaDescription", "Social media description" , $this->owner->SocialMediaDescription
        )->setDescription('Set the description to show in social media posts. If left blank, the meta description will be used');

        $SocialMediaImage = UploadField::create(
            "SocialMediaImage",
            "Social media thumbnail"
        );
        
        $SocialMediaImage->setAllowedMaxFileNumber(1);
        $SocialMediaImage->setAllowedFileCategories("image");
        $SocialMediaImage->setFolderName("/SocialMediaThumbnails");
        $SocialMediaImage->setDescription("An ideal image should be approximately 1200 pixels wide x 630 pixels high. Optimise the image to keep the size under 1MB.");
        
        $TwitterCardType = DropdownField::create(
            'TwitterCardType',
            'Twitter card type',
            $this->owner->dbObject('TwitterCardType')->enumValues()
        );
       $TwitterCardType->setDescription("The Twitter card type to use in posts");
 
        
        $fields->addFieldsToTab('Root.SocialMedia', [
            $SocialMediaTitle,
            $SocialMediaDescription,
            $SocialMediaImage,
            $TwitterCardType
        ]);
    }
    
    public function socialMetadata()
    {
        $metadata = '';
        
        if ($this->owner->SocialMediaTitle != '') {
            $metadata += '<meta property="og:title" content="'. $this->owner->SocialMediaTitle . '">';
        }
    
/**<meta property="og:description" content="Offering tour packages for individuals or groups.">
    <meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">
    <meta property="og:url" content="http://euro-travel-example.com/index.htm">
    <meta name="twitter:card" content="summary_large_image"> //The card type, which will be one of “summary”, “summary_large_image”, “app”, or “player”.
   
**/
        return $metadata;
    }
    
    
}