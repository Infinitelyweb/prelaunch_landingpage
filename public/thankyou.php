<?php 
require_once __DIR__.'/../config/autoload.php';

use Infinitely\Page;

// get page with default values
$page = new Page('masterhead');

echo $twig->render('view/thankyou.html.twig', $page->getPageItems());