<?php

date_default_timezone_set( 'Europe/Berlin' );

error_reporting(0);
ini_set("display_errors", 0);

function getConfig() 
{
    return [
        'rootDir' =>  dirname(__DIR__),
        'configDir' => __DIR__,
    ];   
}
