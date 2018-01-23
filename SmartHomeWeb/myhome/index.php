<?php
include_once("../ayarlar.php");
$deviceip_exists = FALSE;
if(isset($_SESSION["username"])){
    $user = $_SESSION["username"];
    $last_signed = $_SESSION["LastSignedIn"];
    $did = $_SESSION["did"];
    $deviceip_query = mysql_query("SELECT * FROM deviceip WHERE DeviceId = '".$did."'");
    if(mysql_num_rows($deviceip_query)){
        $deviceip_exists = TRUE;
        $deviceip_array = mysql_fetch_array($deviceip_query);
        extract($deviceip_array);
    }else{
        $deviceip_exists = FALSE;
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
                            <li class="active"><a href="#">My Home</a></li>
                            <li><a href="sensors.php">Sensors</a></a></li>
                            <li><a href="relays.php">Relays</a></li> 
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
                <div class="alert alert-info fade in" style="margin-top:18px;"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a>You last logged in on <strong><?php echo $last_signed; ?> </strong></div>
                <?php if($deviceip_exists){
                    echo '<div class="alert alert-success">Your Devices last IP is <strong>'.$IP.'</strong> <span data-toggle="popover" data-trigger="hover" title="Tip" data-content="Your IP is recorded when your device is powered on. If you power off your device we cant detect that. So we will send data to same IP."><span class="badge">?</span></span></div>';
                }else{
                    echo '<div class="alert alert-danger">Your Device had never connected to our server. Please check our <a href="SmartHomeManual.pdf">Manual</a>.</div>';
               }?>
                <!--Main Content Here-->
            </div>
        </div>
    </body>
</html>
<?php
    $last_signed_query = mysql_query("UPDATE kullanicilar SET LastSignedIn = '".date("d.m.Y H:i:s")."' WHERE Username = '".$user."'");
    $_SESSION["LastSignedIn"] = date("d.m.Y H:i:s");
}else{
    echo 'Session is not started';
}
?>