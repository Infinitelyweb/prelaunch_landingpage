<?php 
require_once __DIR__.'/config/autoload.php';

use Infinitely\Page;

$page = new Page();

// override default settings
$header = [
    'brand' => 'My Landing Page NEW',
];
$page->addPageItems('header', $header);

echo $twig->render('view/landingpage-nonav.html.twig', $page->getPageItems());