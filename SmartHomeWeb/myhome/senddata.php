<?php
include_once("../ayarlar.php");
include_once("../fromdevice/outputfuncs.php");
if($_GET){
    if(isset($_SESSION["username"]) && isset($_SESSION["did"])){
        $did = $_SESSION["did"];
        echo 'GETed';
        if(isset($_GET["r1"])){
            if($_GET["r1"] == "on"){
                mysql_query("UPDATE relaylog SET r1 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r1", "on");
                echo 'Worked to on';
            }else{
                mysql_query("UPDATE relaylog SET r1 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r1", "off");
                echo 'Worked to off';
            }
        }
        if(isset($_GET["r2"])){
            if($_GET["r2"] == "on"){
                mysql_query("UPDATE relaylog SET r2 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r2", "on");
            }else{
                mysql_query("UPDATE relaylog SET r2 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r2", "off");
            }
        }
        if(isset($_GET["r3"])){
            if($_GET["r3"] == "on"){
                mysql_query("UPDATE relaylog SET r3 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r3", "on");
            }else{
                mysql_query("UPDATE relaylog SET r3 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r3", "off");
            }
        }
        if(isset($_GET["r4"])){
            if($_GET["r4"] == "on"){
                mysql_query("UPDATE relaylog SET r4 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r4", "on");
            }else{
                mysql_query("UPDATE relaylog SET r4 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r4", "off");
            }
        }
        if(isset($_GET["r5"])){
            if($_GET["r5"] == "on"){
                mysql_query("UPDATE relaylog SET r5 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r5", "on");
            }else{
                mysql_query("UPDATE relaylog SET r5 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r5", "off");
            }
        }
        if(isset($_GET["r6"])){
            if($_GET["r6"] == "on"){
                mysql_query("UPDATE relaylog SET r6 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r6", "on");
            }else{
                mysql_query("UPDATE relaylog SET r6 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r6", "off");
            }
        }
        if(isset($_GET["r7"])){
            if($_GET["r7"] == "on"){
                mysql_query("UPDATE relaylog SET r7 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r7", "on");
            }else{
                mysql_query("UPDATE relaylog SET r7 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r7", "off");
            }
        }
        if(isset($_GET["r8"])){
            if($_GET["r8"] == "on"){
                mysql_query("UPDATE relaylog SET r8 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r8", "on");
            }else{
                mysql_query("UPDATE relaylog SET r8 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r8", "off");
            }
        }
        if(isset($_GET["r9"])){
            if($_GET["r9"] == "on"){
                mysql_query("UPDATE relaylog SET r9 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r9", "on");
            }else{
                mysql_query("UPDATE relaylog SET r9 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r9", "off");
            }
        }
        if(isset($_GET["r10"])){
            if($_GET["r10"] == "on"){
                mysql_query("UPDATE relaylog SET r10 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r10", "on");
            }else{
                mysql_query("UPDATE relaylog SET r10 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r10", "off");
            }
        }
        if(isset($_GET["r11"])){
            if($_GET["r11"] == "on"){
                mysql_query("UPDATE relaylog SET r11 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r11", "on");
            }else{
                mysql_query("UPDATE relaylog SET r11 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r11", "off");
            }
        }
        if(isset($_GET["r12"])){
            if($_GET["r12"] == "on"){
                mysql_query("UPDATE relaylog SET r12 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r12", "on");
            }else{
                mysql_query("UPDATE relaylog SET r12 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r12", "off");
            }
        }
        if(isset($_GET["r13"])){
            if($_GET["r13"] == "on"){
                mysql_query("UPDATE relaylog SET r13 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r13", "on");
            }else{
                mysql_query("UPDATE relaylog SET r13 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r13", "off");
            }
        }
        if(isset($_GET["r14"])){
            if($_GET["r14"] == "on"){
                mysql_query("UPDATE relaylog SET r14 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r14", "on");
            }else{
                mysql_query("UPDATE relaylog SET r14 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r14", "off");
            }
        }
        if(isset($_GET["r15"])){
            if($_GET["r15"] == "on"){
                mysql_query("UPDATE relaylog SET r15 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r15", "on");
            }else{
                mysql_query("UPDATE relaylog SET r15 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r15", "off");
            }
        }
        if(isset($_GET["r16"])){
            if($_GET["r16"] == "on"){
                mysql_query("UPDATE relaylog SET r16 = '1' WHERE DeviceId = '".$did."'");
                setOut($did, "r16", "on");
            }else{
                mysql_query("UPDATE relaylog SET r16 = '0' WHERE DeviceId = '".$did."'");
                setOut($did, "r16", "off");
            }
        }
        
                header("Location: /smarthome/myhome/relays.php");
    }else{
        echo 'Failed on session';
    }
}else{
    echo 'Failed on GET';
}
?>
