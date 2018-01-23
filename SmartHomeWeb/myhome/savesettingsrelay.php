<?php
    include_once("../ayarlar.php");
    if($_POST){
        $r1 = $_POST["r1"];
        $r2 = $_POST["r2"];
        $r3 = $_POST["r3"];
        $r4 = $_POST["r4"];
        $r5 = $_POST["r5"];
        $r6 = $_POST["r6"];
        $r7 = $_POST["r7"];
        $r8 = $_POST["r8"];
        $r9 = $_POST["r9"];
        $r10 = $_POST["r10"];
        $r11 = $_POST["r11"];
        $r12 = $_POST["r12"];
        $r13 = $_POST["r13"];
        $r14 = $_POST["r14"];
        $r15 = $_POST["r15"];
        $r16 = $_POST["r16"];
        $un = $_SESSION["username"];
        $try_update = mysql_query("SELECT * FROM relaynames WHERE Username = '".$un."'");
        if(mysql_num_rows($try_update)){
            mysql_query("UPDATE relaynames SET r1name = '".$r1."', r2name = '".$r2."', r3name = '".$r3."', r4name = '".$r4."', r5name = '".$r5."', r6name = '".$r6."', r7name = '".$r7."', r8name = '".$r8."', r9name = '".$r9."', r10name = '".$r10."', r11name = '".$r11."', r12name = '".$r12."', r13name = '".$r13."', r14name = '".$r14."', r15name = '".$r15."', r16name = '".$r16."' WHERE Username = '".$un."'");
        }else{
            mysql_query("INSERT INTO relaynames (Username,r1name,r2name,r3name,r4name,r5name,r6name,r7name,r8name,r9name,r10name,r11name,r12name,r13name,r14name,r15name,r16name) VALUES ('".$un."','".$r1."','".$r2."','".$r3."','".$r4."','".$r5."','".$r6."','".$r7."','".$r8."','".$r9."','".$r10."','".$r11."','".$r12."','".$r13."','".$r14."','".$r15."','".$r16."')");
        }
    }
    header("Location: /smarthome/myhome/");
?>
