<?php

namespace Infinitely;

use Infinitely\DefaultVar;

class Page
{
    protected $pageItems;

    /**
     * loads default values
     */
    public function __construct() {
        $this->pageItems = [];
        $this->loadDefaults();
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
    
    /**
     * generate default values
     */
    public function loadDefaults() 
    {
        foreach(DefaultVar::getDefaultVars() as $key => $value) {
            $this->addPageItems($key, $value);
        }
    }
}
