<?php
date_default_timezone_set( 'Europe/Berlin' );
error_reporting(E_ALL);
ini_set("display_errors", 1);
require __DIR__.'/../../vendor/autoload.php';

include_once __DIR__.'/../../src/config.php';

$config = getConfig();

$loader = new Twig_Loader_Filesystem($config['rootDir'] . '/template');
$twig = new Twig_Environment($loader, array(
    //'cache' => $config['rootDir'] .  '/var/cache',
    'debug' => true
));