<?php
require __DIR__.'/../vendor/autoload.php';

include_once __DIR__.'/config.php';

$config = getConfig();

$loader = new Twig_Loader_Filesystem($config['rootDir'] . '/template');
$twig = new Twig_Environment($loader, array(
    //'cache' => $config['rootDir'] .  '/var/cache',
    'debug' => true
));