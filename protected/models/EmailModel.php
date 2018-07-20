<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author jianhengzhang
 */
class EmailModel {
    //put your code here
    public function emailRequest($offDateModel, $user){
        $from = $user->email;
        $admin_user = Employee::model()->findAll('isAdmin=:isAdmin', array('isAdmin'=>1));
        $email_arr = array();
        foreach ($admin_user as $u) {
            array_push($email_arr, $u->email);
        }
        
        mail("jansenzjh@gmail.com", "test", "this is mess", "From: jzhang@dpsol.com");

    }
}

?>
