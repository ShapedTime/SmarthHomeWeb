<?php
    include_once("../ayarlar.php");
    if($_POST){
        if($_POST["pass"] == "7s6d7"){
            $deviceid = $_POST["device"];
            $ordpass = $_POST["ordp"];
            $sensor1 = $_POST["s1"];
            $sensor2 = $_POST["s2"];
            $sensor3 = $_POST["s3"];
            $sensor4 = $_POST["s4"];
            $sensor5 = $_POST["s5"];
            $sensor6 = $_POST["s6"];
            $sensor7 = $_POST["s7"];
            $sensor8 = $_POST["s8"];
            $devices_query = mysql_query("SELECT * FROM devices WHERE DeviceId = '".$deviceid."' && OrdererPass = '".$ordpass."' && registered = '1'");
            if(mysql_num_rows($devices_query)){
                mysql_query("INSERT INTO fromdevices (DeviceId,sensor1,sensor2,sensor3,sensor4,sensor5,sensor6,sensor7,sensor8,date) VALUES ('".$deviceid."','".$sensor1."','".$sensor2."','".$sensor3."','".$sensor4."','".$sensor5."','".$sensor6."','".$sensor7."','".$sensor8."','".date("d.m.Y h:i:sa")."')");
            }
        }
    }
?>
