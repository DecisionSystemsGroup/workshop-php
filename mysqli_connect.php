<?php
#script sql connect


$DB_HOST='localhost';
$DB_NAME='workshop-php';
$DB_PASSWORD='';
$DB_USER='root';

$dbc = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
$dbc->set_charset('utf8') OR 
die ('Could not connect to MySQL: ' . 
mysqli_connect_error() );
?>