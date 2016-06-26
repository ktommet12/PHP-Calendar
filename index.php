<?php

date_default_timezone_set('America/Phoenix');
require_once("classes/Calendar.php");

$calendar = null;
$months = Calendar::getMonths();
$monthNum = 0;
$monthNum = (isset($_GET['month']))? array_search($_GET['month'], $months) : date('m', time())-1;

$calendar = new Calendar($monthNum);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/calendar.css">
    </head>
    <body>
            <div class="calendar-container">
                <?php $calendar->displayCalendar();?>              
            </div>
    </body>
</html>
