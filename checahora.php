<?php
$DateAndTime = date('m-d-Y h:i:s a', time());  
echo "The current date and time are $DateAndTime.";


date_default_timezone_set('Europe/London');

if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone');
}


?>