<?php
function getConnection() {
$dbhost="localhost";
$dbuser="root";
$dbpass="10gXWOqeaf";
$dbname="task";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbnamecc)or die(mysql_error());
return $connection;
}
?>