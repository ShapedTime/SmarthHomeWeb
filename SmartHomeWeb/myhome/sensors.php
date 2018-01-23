<?php
include_once("../ayarlar.php");
$deviceip_exists = FALSE;
if(isset($_SESSION["username"])){
    $user = $_SESSION["username"];
    $last_signed = $_SESSION["LastSignedIn"];
    $did = $_SESSION["did"];
    $sensor_names_query = mysql_query("SELECT * FROM sensornames WHERE Username = '".$user."'");
    if(mysql_num_rows($sensor_names_query)){
        $sensor_names_array = mysql_fetch_array($sensor_names_query);
        $sensor1_name = $sensor_names_array["sensor1"];
        $sensor2_name = $sensor_names_array["sensor2"];
        $sensor3_name = $sensor_names_array["sensor3"];
        $sensor4_name = $sensor_names_array["sensor4"];
        $sensor5_name = $sensor_names_array["sensor5"];
        $sensor6_name = $sensor_names_array["sensor6"];
        $sensor7_name = $sensor_names_array["sensor7"];
        $sensor8_name = $sensor_names_array["sensor8"];
    }else{
        $sensor1_name = "Sensor 1";
        $sensor2_name = "Sensor 2";
        $sensor3_name = "Sensor 3";
        $sensor4_name = "Sensor 4";
        $sensor5_name = "Sensor 5";
        $sensor6_name = "Sensor 6";
        $sensor7_name = "Sensor 7";
        $sensor8_name = "Sensor 8";
    }
    $sensors_query = mysql_query("SELECT * FROM fromdevices WHERE DeviceId = '".$did."'");
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
                            <li class="active"><a href="#">Sensors</a></a></li>
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
                <table class="table" style="color: #dbdbdb;">
                <thead style="color: #fff;">
                    <tr>
                        <th><?php echo $sensor1_name; ?></th>
                        <th><?php echo $sensor2_name; ?></th>
                        <th><?php echo $sensor3_name; ?></th>
                        <th><?php echo $sensor4_name; ?></th>
                        <th><?php echo $sensor5_name; ?></th>
                        <th><?php echo $sensor6_name; ?></th>
                        <th><?php echo $sensor7_name; ?></th>
                        <th><?php echo $sensor8_name; ?></th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($sensors_array = mysql_fetch_array($sensors_query)){
                            extract($sensors_array);
                            echo '
                                    <tr>
                                        <td>'.$sensor1.'</td>
                                        <td>'.$sensor2.'</td>
                                        <td>'.$sensor3.'</td>
                                        <td>'.$sensor4.'</td>
                                        <td>'.$sensor5.'</td>
                                        <td>'.$sensor6.'</td>
                                        <td>'.$sensor7.'</td>
                                        <td>'.$sensor8.'</td>
                                        <td>'.$date.'</td>
                                    </tr>';
                        }
                    ?>
                </tbody>
                </table>
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