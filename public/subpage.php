<?php 
require_once __DIR__.'/../config/autoload.php';

use Infinitely\Page;

// get page with default values
$page = new Page('subpage');
$page->addPageItems('subpage', ['maincontent' => 'Put some Text or whatever in here']);

echo $twig->render('view/subpage.html.twig', $page->getPageItems());