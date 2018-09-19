<?php

namespace App\Controllers;

use \App\Models\User;

/**
 * Account controller
 * 
 * PHP verions 7.1
 */
class Account extends \Core\Controller
{
    /**
     * validate if email is available (AJAX) for a new qignup.Account
     * 
     * @return void
     */
    public function validateEmailAction()
    {
        $is_valid = ! User::emailExists($_GET['email']);

        header('Content-Type: application/json');
        echo json_encode($is_valid);
    }
}
