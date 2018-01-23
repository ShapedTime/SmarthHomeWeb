<?php
    include_once("../ayarlar.php");
    include_once("outputfuncs.php");
//    function get_client_ip_server() {
//  
//        if (!empty($_SERVER['HTTP_X_FORWARED_FOR']))
//        {
//            $client_ip = $_SERVER['HTTP_X_FORWARED_FOR'];
//        }
//        elseif (!empty($_SERVER['HTTP_CLIENT_IP']))
//        {
//            $client_ip = $_SERVER['HTTP_CLIENT_IP'];
//        }
//        else
//        {
//            $client_ip = $_SERVER['REMOTE_ADDR'];
//        }
//        return $client_ip;
//    }
    if($_POST){
        if($_POST["pass"] == "7s6d7"){
            $devicei = $_POST["di"];
            $ordpass = $_POST["ordp"];
            $devices_query = mysql_query("SELECT * FROM devices WHERE DeviceId = '".$devicei."' && OrdererPass = '".$ordpass."' && registered = '1'");
            if(mysql_num_rows($devices_query)){
//                $ip = get_client_ip_server();
                $ip = "testing";
                mysql_query("INSERT INTO deviceip (DeviceId, IP, resetted) VALUES ('".$devicei."','".$ip."','1')");
                $relaylog_query = mysql_query("SELECT * FROM relaylog WHERE DeviceId = '".$devicei."'");
                if(mysql_num_rows($relaylog_query)){
                    $relaylog_array = mysql_fetch_array($relaylog_query);
                    extract($relaylog_array);
                    if($r1){
                        setOut($devicei, "r1", "on");
                    }else{
                        setOut($devicei, "r1", "off");
                    }
                    if($r2){
                        setOut($devicei, "r2", "on");
                    }else{
                        setOut($devicei, "r2", "off");
                    }
                    if($r3){
                        setOut($devicei, "r3", "on");
                    }else{
                        setOut($devicei, "r3", "off");
                    }
                    if($r4){
                        setOut($devicei, "r4", "on");
                    }else{
                        setOut($devicei, "r4", "off");
                    }
                    if($r5){
                        setOut($devicei, "r5", "on");
                    }else{
                        setOut($devicei, "r5", "off");
                    }
                    if($r6){
                        setOut($devicei, "r6", "on");
                    }else{
                        setOut($devicei, "r6", "off");
                    }
                    if($r7){
                        setOut($devicei, "r7", "on");
                    }else{
                        setOut($devicei, "r7", "off");
                    }
                    if($r8){
                        setOut($devicei, "r8", "on");
                    }else{
                        setOut($devicei, "r8", "off");
                    }
                    if($r9){
                        setOut($devicei, "r9", "on");
                    }else{
                        setOut($devicei, "r9", "off");
                    }
                    if($r10){
                        setOut($devicei, "r10", "on");
                    }else{
                        setOut($devicei, "r10", "off");
                    }
                    if($r11){
                        setOut($devicei, "r11", "on");
                    }else{
                        setOut($devicei, "r11", "off");
                    }
                    if($r12){
                        setOut($devicei, "r12", "on");
                    }else{
                        setOut($devicei, "r12", "off");
                    }
                    if($r13){
                        setOut($devicei, "r13", "on");
                    }else{
                        setOut($devicei, "r13", "off");
                    }
                    if($r14){
                        setOut($devicei, "r14", "on");
                    }else{
                        setOut($devicei, "r14", "off");
                    }
                    if($r15){
                        setOut($devicei, "r15", "on");
                    }else{
                        setOut($devicei, "r15", "off");
                    }
                    if($r16){
                        setOut($devicei, "r16", "on");
                    }else{
                        setOut($devicei, "r16", "off");
                    }
                }
            }
        }
    }
?>
