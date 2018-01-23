<?php
 include_once("../ayarlar.php");
if($_GET){
    if($_GET["pass"] == "7465796d757230302e30372e3038" && $_SESSION["permissions"] == "ENDLESS"){
        $requests_query = mysql_query("SELECT * FROM requests WHERE Accepted = 0 ORDER BY id DESC");
        
         ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8" />
                <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
                <title></title>
            </head>
            <body>
                <h1 class="welcome">Welcome Back Boss</h1>
                <div class="container">
                    <div class="left-section">
                    <?php
                        if(mysql_num_rows($requests_query)){
                            while($requests_query_array = mysql_fetch_array($requests_query)){
                                extract($requests_query_array);
                                echo '<div class="requests-table">
                                        <strong>Username : </strong>'.$Username.'<br />
                                        <strong>Email : </strong>'.$Email.'<br />
                                        <strong>PhoneNumber : </strong>'.$PhoneNumber.'<br />
                                        <srong>DeviceId : </strong>'.$DeviceId1.'<br />
                                        <a href="acceptrequest.php/?pass=7465796d757230302e30372e3038&id='.$id.'">[Accept]</a>
                                      </div>';
                            }
                        }else{
                            echo '<font color="white"><strong>There is no new requests BOSS.</strong></font>';
                        }
                    ?>
                    </div>
                    <div class="right-section">
                    
                    </div>
                </div>
            </body>
        </html>
<?php
    }else{
    echo "U haven't permissions to enter here dude.";
    header("Location: ../index.php");
    }        
}
else{
    echo "U haven't permissions to enter here dude.";
    header("Location: ../index.php");
}

?>

