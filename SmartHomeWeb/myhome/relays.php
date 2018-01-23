<?php
include_once("../ayarlar.php");
$deviceip_exists = FALSE;
$isactive = FALSE;
if(isset($_SESSION["username"])){
    $user = $_SESSION["username"];
    $last_signed = $_SESSION["LastSignedIn"];
    $did = $_SESSION["did"];
    $relaylog_query = mysql_query("SELECT * FROM relaylog WHERE DeviceId = '".$did."'");
    if(mysql_num_rows($relaylog_query)==0){
        mysql_query("INSERT INTO relaylog (DeviceId,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16) VALUES ('".$did."','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')");
        $relaylog_query = mysql_query("SELECT * FROM relaylog WHERE DeviceId = '".$did."'");
    } 
    $relay_names_query = mysql_query("SELECT * FROM relaynames WHERE Username = '".$user."'");
    if(mysql_num_rows($relay_names_query)){
        $relay_names_array = mysql_fetch_array($relay_names_query);
        $relay1_name = $relay_names_array["r1name"];
        $relay2_name = $relay_names_array["r2name"];
        $relay3_name = $relay_names_array["r3name"];
        $relay4_name = $relay_names_array["r4name"];
        $relay5_name = $relay_names_array["r5name"];
        $relay6_name = $relay_names_array["r6name"];
        $relay7_name = $relay_names_array["r7name"];
        $relay8_name = $relay_names_array["r8name"];
        $relay9_name = $relay_names_array["r9name"];
        $relay10_name = $relay_names_array["r10name"];
        $relay11_name = $relay_names_array["r11name"];
        $relay12_name = $relay_names_array["r12name"];
        $relay13_name = $relay_names_array["r13name"];
        $relay14_name = $relay_names_array["r14name"];
        $relay15_name = $relay_names_array["r15name"];
        $relay16_name = $relay_names_array["r16name"];
    }else{
        $relay1_name = "Relay 1";
        $relay2_name = "Relay 2";
        $relay3_name = "Relay 3";
        $relay4_name = "Relay 4";
        $relay5_name = "Relay 5";
        $relay6_name = "Relay 6";
        $relay7_name = "Relay 7";
        $relay8_name = "Relay 8";
        $relay9_name = "Relay 9";
        $relay10_name = "Relay 10";
        $relay11_name = "Relay 11";
        $relay12_name = "Relay 12";
        $relay13_name = "Relay 13";
        $relay14_name = "Relay 14";
        $relay15_name = "Relay 15";
        $relay16_name = "Relay 16";
    }
    $relaylog_array = mysql_fetch_array($relaylog_query);
    $r1 = $relaylog_array["r1"];
    $r2 = $relaylog_array["r2"];
    $r3 = $relaylog_array["r3"];
    $r4 = $relaylog_array["r4"];
    $r5 = $relaylog_array["r5"];
    $r6 = $relaylog_array["r6"];
    $r7 = $relaylog_array["r7"];
    $r8 = $relaylog_array["r8"];
    $r9 = $relaylog_array["r9"];
    $r10 = $relaylog_array["r10"];
    $r11 = $relaylog_array["r11"];
    $r12 = $relaylog_array["r12"];
    $r13 = $relaylog_array["r13"];
    $r14 = $relaylog_array["r14"];
    $r15 = $relaylog_array["r15"];
    $r16 = $relaylog_array["r16"];
    if($r1){
        $r1_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r1=off">OFF</a>';
    }else{
        $r1_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r1=on">ON</a>';
    }
    if($r2){
        $r2_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r2=off">OFF</a>';
    }else{
        $r2_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r2=on">ON</a>';
    }
    if($r3){
        $r3_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r3=off">OFF</a>';
    }else{
        $r3_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r3=on">ON</a>';
    }
    if($r4){
        $r4_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r4=off">OFF</a>';
    }else{
        $r4_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r4=on">ON</a>';
    }
    if($r5){
        $r5_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r5=off">OFF</a>';
    }else{
        $r5_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r5=on">ON</a>';
    }
    if($r6){
        $r6_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r6=off">OFF</a>';
    }else{
        $r6_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r6=on">ON</a>';
    }
    if($r7){
        $r7_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r7=off">OFF</a>';
    }else{
        $r7_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r7=on">ON</a>';
    }
    if($r8){
        $r8_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r8=off">OFF</a>';
    }else{
        $r8_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r8=on">ON</a>';
    }
    if($r9){
        $r9_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r9=off">OFF</a>';
    }else{
        $r9_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r9=on">ON</a>';
    }
    if($r10){
        $r10_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r10=off">OFF</a>';
    }else{
        $r10_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r10=on">ON</a>';
    }
    if($r11){
        $r11_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r11=off">OFF</a>';
    }else{
        $r11_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r11=on">ON</a>';
    }
    if($r12){
        $r12_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r12=off">OFF</a>';
    }else{
        $r12_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r12=on">ON</a>';
    }
    if($r13){
        $r13_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r13=off">OFF</a>';
    }else{
        $r13_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r13=on">ON</a>';
    }
    if($r14){
        $r14_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r14=off">OFF</a>';
    }else{
        $r14_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r14=on">ON</a>';
    }
    if($r15){
        $r15_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r15=off">OFF</a>';
    }else{
        $r15_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r15=on">ON</a>';
    }
    if($r16){
        $r16_button = '<a type="button" class="btn btn-danger" href = "senddata.php/?r16=off">OFF</a>';
    }else{
        $r16_button = '<a type="button" class="btn btn-success" href = "senddata.php/?r16=on">ON</a>';
    }
    $sensors_query = mysql_query("SELECT * FROM fromdevices WHERE DeviceId = '".$did."' ORDER BY id DESC");
    if(mysql_num_rows($sensors_query)){
        $sensors_array = mysql_fetch_array($sensors_query);
        $last_date = strtotime($sensors_array["date"]);
        $date = getdate();
        $fff = getdate($last_date);
        $time_difference = 1;
        if($date["hours"] == $fff["hours"] && $date["yday"] == $fff["yday"] && $date["year"] == $fff["year"]){
            $diff = $date["minutes"] - $fff["minutes"];
            if($diff<6){
                $isactive = TRUE;
            }
        echo $diff;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="jquery-2.1.4.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       
        <meta charset="utf-8" />
        <script>
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover(); 
            });
        </script>
        <title></title>
    </head>
    <body style="background-image: url(Gray-plain-website-background.jpg); background-position: center; background-size: cover;">
        <div class="container-fluid">
            <div class="container" style="height: 51px;">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="navbar-header">
                        <a class="navbar-brand glyphicon glyphicon-home" href="../index.php"><span style="font-family: Arial">  Smart Home</span></a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">My Home</a></li>
                            <li><a href="sensors.php">Sensors</a></a></li>
                            <li class="active"><a href="relays.php">Relays</a></li> 
                            <li><a href="settings.php">Settings</a></li> 
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="cixis.php"><span class="glyphicon glyphicon-log-out"><span style="font-family: Arial;"> Log Out</span></span></a></li>
                        </ul>
                    </div>
            </nav>
            </div>
            <div class="container">
                <!--Main Content Here-->
                <?php if($isactive){?>
                    <div class="panel panel-default">
                        <div class="panel-body"><span><?php echo $relay1_name.' :  '.$r1_button; ?></span> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay2_name.' :  '.$r2_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay3_name.' :  '.$r3_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay4_name.' :  '.$r4_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay5_name.' :  '.$r5_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay6_name.' :  '.$r6_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay7_name.' :  '.$r7_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay8_name.' :  '.$r8_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay9_name.' :  '.$r9_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay10_name.' : '.$r10_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay11_name.' : '.$r11_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay12_name.' : '.$r12_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay13_name.' : '.$r13_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay14_name.' : '.$r14_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay15_name.' : '.$r15_button; ?> </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><?php echo $relay16_name.' : '.$r16_button; ?> </div>
                    </div>
                <?php }else{?>
                    <div class="alert alert-danger">Your device is not responding.</div>
                <?php }?>
                <!--Main Content Here-->
            </div>
        </div>
    </body>
</html>
<?php
}else{
    echo 'Session is not started';
}
?>