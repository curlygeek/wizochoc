<?php

namespace Honeydukes\Wizochoc\Extensions;

use SilverStripe\Core\Extension;


class SocialPageControllerExtension extends Extension
{

    
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
        //return $metadata;
    }
    
}