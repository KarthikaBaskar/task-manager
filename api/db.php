<?php
function getConnection() {
$dbhost="karthikabaskar-task-manager-1345844";
$dbuser="karthikabaskar";
$dbpass="";
$dbname="database";
$port = "3306"; 
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port)or die(mysql_error());
return $connection;
}
?>