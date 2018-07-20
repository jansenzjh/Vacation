<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SharedModel
 *
 * @author jianhengzhang
 */
class SharedModel {
    //put your code here
    public function days_different($fromDate, $toDate){
        $ts1 = strtotime($fromDate);
        $ts2 = strtotime($toDate);

        $seconds_diff = $ts2 - $ts1;
        //echo CHtml::encode($seconds_diff/3600/24);
        return $seconds_diff/3600/24 + 1;
    }
}

?>
