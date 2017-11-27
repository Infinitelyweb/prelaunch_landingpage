<?php 
require_once __DIR__.'/../config/autoload.php';

use Infinitely\Page;

// get page with default values
$page = new Page('masterhead');
$page->addPageItems('masterhead', [
    'headline' => 'Uppss...404', 
    'lead' => 'http://www.'.$_SERVER['HTTP_HOST'].'.de']
        );

echo $twig->render('view/thankyou.html.twig', $page->getPageItems());