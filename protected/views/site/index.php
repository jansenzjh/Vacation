<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$total_holiday_count = 18;
$total_vacation_count = 11;
?>

<div class="title">
    DP Solutions Chinese Branch 2014 Approved Holiday
</div>

<div>
    Every developer will have eighteen(<?php echo $total_holiday_count; ?>) days off per year, seven (7) days holiday plus eleven (<?php echo $total_vacation_count; ?>) days vacation.
</div>

<br>

<div class="title">
    Chinese Holiday:
</div>
<div class="view">
<?php
    $holiday = Holiday::model()->findAll(array('order'=>'holidayDate'));
    foreach ($holiday as $hld){
        echo sprintf("<div>%s %s</div>", $hld->holidayDate, $hld->description);
    }
?>
</div>
<br>

<div class="title">
    Employees Status
</div>
<?php
    $userList = Employee::model()->findAll();
    foreach ($userList as $user){
        $offDateList = OffDate::model()->findAll(array("condition"=>"employeeId = $user->id"));
        if (count($offDateList) == 0){
            continue;
        }
        echo "<div class='view'>";
        echo sprintf("<div class='title'>%s </div>", strtoupper($user->name));
        
        
        $total_day_off = 0;
        echo "<table>";
        echo "<tr><th>From</th><th>To</th><th>Days</th><th>Description</th></tr>";
        foreach ($offDateList as $off){
            $day_diff = SharedModel::days_different($off->fromDate, $off->toDate);
            $total_day_off += $day_diff;
            echo sprintf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%s</td></tr>", $off->fromDate, $off->toDate, $day_diff, $off->description);
        }
        //Summary
        echo sprintf("<tr><th>%s</th><th>%s</th><th>%d days</th><th>%s days left in %d</th></tr>", "Total", "", $total_day_off, $total_vacation_count - $total_day_off, date("Y"));
        //echo "</div>";
        echo '</table>';
        echo "</div>";
    }
?>