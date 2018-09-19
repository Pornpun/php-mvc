<?php

namespace App\Controllers;

use \Core\View;
use \App\Auth;

/**
 * Items controller (example)
 * 
 * PHP version 7.0
 */
class Items extends Authenticated
{
    /**
     * Items index
     * 
     * $return void
     */
    public function indexAction()
    {
        //$this->requireLogin();
        View::renderTemplate('Items/index.html');
    }

    /**
     * Add a new item
     * 
     * @return void
     */
    public function newAction()
    {
       // $this->requireLogin();

        echo "new action";
    }

    /**
     * Show an item
     * 
     * @return void
     */
    public function showAction()
    {
        //$this->requireLogin();
        
        echo "show action";
    }

}