<?php
include_once("../ayarlar.php");
$deviceip_exists = FALSE;
if(isset($_SESSION["username"])){
    $user = $_SESSION["username"];
    $last_signed = $_SESSION["LastSignedIn"];
    $did = $_SESSION["did"];
    
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
                            <li><a href="relays.php">Relays</a></li> 
                            <li class="active"><a href="#">Settings</a></li> 
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="cixis.php"><span class="glyphicon glyphicon-log-out"><span style="font-family: Arial;"> Log Out</span></span></a></li>
                        </ul>
                    </div>
            </nav>
            </div>
            <div class="container">
                <!--Main Content Here-->
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sensor Names</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <form action="savesettingssensor.php" method="post" class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 2</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s2">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 3</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s3">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s4">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s5">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 6</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s6">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 7</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s7">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Sensor 8</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="s8">
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-info btn-block">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Relay Names</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                
                                
                                <form action="savesettingsrelay.php" method="post" class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 2</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r2">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 3</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r3">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r4">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r5">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 6</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r6">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 7</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r7">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 8</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r8">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 9</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r9">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 10</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r10">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 11</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r11">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 12</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 13</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r13">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 14</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r14">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 15</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r15">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Relay 16</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="r16">
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-info btn-block">Save</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
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