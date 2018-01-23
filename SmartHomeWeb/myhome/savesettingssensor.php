<?php
    include_once("../ayarlar.php");
    if($_POST){
        $s1 = $_POST["s1"];
        $s2 = $_POST["s2"];
        $s3 = $_POST["s3"];
        $s4 = $_POST["s4"];
        $s5 = $_POST["s5"];
        $s6 = $_POST["s6"];
        $s7 = $_POST["s7"];
        $s8 = $_POST["s8"];
        $un = $_SESSION["username"];
        $try_update = mysql_query("SELECT * FROM sensornames WHERE Username = '".$un."'");
        if(mysql_num_rows($try_update)){
            mysql_query("UPDATE sensornames SET sensor1 = '".$s1."', sensor2 = '".$s2."', sensor3 = '".$s3."', sensor4 = '".$s4."', sensor5 = '".$s5."', sensor6 = '".$s6."', sensor7 = '".$s7."', sensor8 = '".$s8."' WHERE Username = '".$un."'");
        }else{
            mysql_query("INSERT INTO sensornames (Username,sensor1,sensor2,sensor3,sensor4,sensor5,sensor6,sensor7,sensor8) VALUES ('".$un."','".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$s7."','".$s8."')");
        }
    }
    header("Location: /smarthome/myhome/");
?>
