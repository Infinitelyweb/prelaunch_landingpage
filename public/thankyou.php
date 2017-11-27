<?php 
require_once __DIR__.'/config/autoload.php';

use Infinitely\Page;

$page = new Page();

// override default settings
$masterhead = [
    'headline' => 'Thank you!',
    'lead' => 'please check your emails!'
];
$page->addPageItems('masterhead', $masterhead);

echo $twig->render('view/thankyou.html.twig', $page->getPageItems());