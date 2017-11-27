<?php

namespace Infinitely;

class Masterhead {
   
    static function getContent() 
    {
        $default = Homepage::getDefaultVars();
        
        $content = [
            'masterhead' => [
                'headline' => 'Thank you!',
                'lead' => 'please check your emails!'
            ],
        ];
        
        return array_merge($default, $content);
    }
}