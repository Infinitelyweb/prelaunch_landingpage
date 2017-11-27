<?php

date_default_timezone_set( 'Europe/Berlin' );
error_reporting(E_ALL);
ini_set("display_errors", 1);

const DOMAIN = 'example.com';

function getConfig() 
{
    return [
        'rootDir' =>  dirname(__DIR__),
        'configDir' => __DIR__,
    ];   
}
