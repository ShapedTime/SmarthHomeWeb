<?php
include_once("../ayarlar.php");
session_unset(); 
session_destroy(); 
header("Location: /index.php");
?>
