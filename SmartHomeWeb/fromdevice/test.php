<?php
include_once("../ayarlar.php");
$req = $_REQUEST;
echo $req;
foreach ($_POST as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}
foreach ($_GET as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}
mysql_query("INSERT INTO postgetip (data, date) VALUES ('".$req."','".date("d.m.Y H:i:s"))");
?>
