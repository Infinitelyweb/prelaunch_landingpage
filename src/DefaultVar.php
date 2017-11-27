<?php

namespace Infinitely;

class DefaultVar {
   
    static function getDefaultVars() {
        return [
            'header' => [
                'title' => 'My Landing Page',
                'brand' => 'My Landing Page',
                'btn' => 'Login'
            ],

            'mailchimp' => [
                'url' => '#',       // add here your mailchimp url
                'placeholderEmail' => 'Enter your email...',
                'submitText' => 'submit',
            ],

            'masterhead' => [
                'headline' => 'Get the App!',
                'lead' => 'Build a landing page for your business or project and generate more leads!',
            ],

            'features' => [
                [ 
                    'title' => 'Fully Responsive', 
                    'lead' => 'This theme will look great on any device, no matter the size!',
                    'icon' => 'icon-screen-desktop'
                ],
                [ 
                    'title' => 'Bootstrap 4 Ready', 
                    'lead' => 'Featuring the latest build of the new Bootstrap 4 framework!',
                    'icon' => 'icon-layers'
                ],
                [ 
                    'title' => 'Easy to Use', 
                    'lead' => 'Ready to use with your own content, or customize the source files!',
                    'icon' => 'icon-check'
                ]
            ],

            'showcases' => [
                [ 
                    'img' => 'bg-showcase-1.jpg', 
                    'title' => 'Fully Responsive Design',
                    'desc' => 'When you use a theme created by Start Bootstrap, you know '
                    . 'that the theme will look great on any device, whether '
                    . 'it´s a phone, tablet, or desktop the page will 
                    behave responsively!'
                ],
                [ 
                    'img' => 'bg-showcase-2.jpg', 
                    'title' => 'Updated For Bootstrap 4',
                    'desc' => 'When you use a theme created by Start Bootstrap, you know '
                    . 'that the theme will look great on any device, whether '
                    . 'it´s a phone, tablet, or desktop the page will 
                    behave responsively!'
                ],
                [ 
                    'img' => 'bg-showcase-3.jpg', 
                    'title' => 'Easy to Use & Customiz',
                    'desc' => 'When you use a theme created by Start Bootstrap, you know '
                    . 'that the theme will look great on any device, whether '
                    . 'it´s a phone, tablet, or desktop the page will 
                    behave responsively!'
                ],
            ],

            'cta' => [
                'title' => 'Ready to get started? Sign up now!!',
            ],

            'footer' => [
                'copy' => date("Y").' Sarah Swoboda',
                'nav'  => [
                    [ 'name' => 'Impressum', 'url' => '/impressum.html' ],
                    [ 'name' => 'Datenschutz', 'url' => '/datenschutz.html']
                ],
                'facebook' => '#',
                'instagram' => '#',
                'twitter' => ''
            ],
        ];
    }
}