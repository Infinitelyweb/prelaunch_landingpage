<?php 
require_once __DIR__.'/../config/autoload.php';

use Infinitely\Page;

// get page with default values
$page = new Page('homepage');

echo $twig->render('view/landingpage-nonav.html.twig', $page->getPageItems());