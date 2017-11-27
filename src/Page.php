<?php

namespace Infinitely;

use Infinitely\DefaultVar;

class Page
{
    protected $pageItems;

    /**
     * loads default values
     */
    public function __construct($page) {
        $this->pageItems = [];
        
        $this->loadContent(ucfirst($page));
    }
    
    /**
     * generate default values
     */
    public function loadContent($classname) 
    {
        $namespaceClass = __NAMESPACE__.'\\'.$classname;
        
        if(class_exists($namespaceClass)) {
            foreach($namespaceClass::getContent() as $key => $value) {
                $this->addPageItems($key, $value);
            }
        }
    }
    
    /**
     * add items to pageItems - used by twig template
     * 
     * @param string $id
     * @param array $settings
     */
    public function addPageItems($id, $settings)
    {
        foreach($settings as $key => $value) {
            $this->pageItems[$id][$key] = $value;
        } 
    }
   
    /**
     * returns the page items that are created - render objects for twig template
     * 
     * @return array
     */
    public function getPageItems()
    {
        return $this->pageItems;
    }
}
