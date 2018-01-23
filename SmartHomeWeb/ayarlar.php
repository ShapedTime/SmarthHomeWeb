<?php
    $connection = mysql_connect("localhost", "root", "toor");
    $db_select = mysql_select_db("mydatabase", $connection);
    session_start();
    date_default_timezone_set("Asia/Baku");
?>

