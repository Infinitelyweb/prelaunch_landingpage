<?php

namespace Infinitely;

class Subpage {
   
    static function getContent() 
    {
        $default = Homepage::getDefaultVars();
        
        $content = [
            'subpage' => [
                'headline' => 'This is the headline',
                'lead' => 'This is the subheadline',
                'maincontent' => 'Test',
            ],
        ];
        
        return array_merge($default, $content);
    }
    
}