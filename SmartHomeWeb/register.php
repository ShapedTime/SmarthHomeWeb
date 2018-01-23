<?php
   include_once("ayarlar.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
        <title>Smart Home</title>
    </head>
    <body>
        <?php
            if($_POST){
                $uname = $_POST["uname"];
                $email = $_POST["email"];
                $pnum = $_POST["pnum"];
                $sifre = $_POST["sifre"];
                $did = $_POST["did"];
                $uname_error = "";
                $email_error = "";
                $pnum_error = "";
                $sifre_error = "";
                $did_error = "";
                
                $did_query = mysql_query("select `mydatabase`.`devices`.`id` AS `id`,`mydatabase`.`devices`.`DeviceId` AS `DeviceId`,`mydatabase`.`devices`.`OrdererPass` AS `OrdererPass`,`mydatabase`.`devices`.`registered` AS `registered` from `mydatabase`.`devices` where ((`mydatabase`.`devices`.`OrdererPass` = '".$sifre."') and (`mydatabase`.`devices`.`DeviceId` = '".$did."') and (`mydatabase`.`devices`.`registered` = '0'))");
                $uname_query = mysql_query("select `mydatabase`.`kullanicilar`.`id` AS `id`,`mydatabase`.`kullanicilar`.`Username` AS `Username`,`mydatabase`.`kullanicilar`.`Email` AS `Email`,`mydatabase`.`kullanicilar`.`PhoneNumber` AS `PhoneNumber`,`mydatabase`.`kullanicilar`.`Sifre` AS `Sifre`,`mydatabase`.`kullanicilar`.`DeviceId1` AS `DeviceId1` from `mydatabase`.`kullanicilar` where (`mydatabase`.`kullanicilar`.`Username` = '".$uname."')");

                if(empty($uname)){
                    $uname_error = "Username can't be empty";
                }elseif(!preg_match("/^[a-zA-Z ]*$/",$uname)){
                    $uname_error = "Only letters and white space allowed";
                }elseif(mysql_num_rows($uname_query)){
                    $uname_error = "This Username is already exists";
                }
                
                if(empty($email)){
                    $email_error = "Email can't be empty";
                }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email_error = "This isn't valid email";
                }

                

                if(empty($sifre)){
                    $sifre_error = "Password can't be empty";
                }elseif(strlen($sifre)<8){
                    $sifre_error = "Password must contain at least 8 characters";
                }

                if(empty($did)){
                    $did_error = "Device ID can't be empty";
                }elseif(mysql_num_rows($did_query)==0){
                    $did_error = "It isn't valid ID or that ID isn't matching with your Password";
                }

                if(!empty($uname_error) || !empty($email_error) || !empty($pnum_error) || !empty($sifre_error) || !empty($did_error)){
                    
                    
                    //-------------------------------------------
                    ?>
                       <div style="top: 0px;">
      <div class="nav-container">
        <nav style="top: 0px;">
            <div class="menu-buttons">
                <a href="index.php" id="first-menu-button">HOME</a>
                <a href="buy.php">BUY</a>
                <a href="download.php">DOWNLOAD</a>
                <a href="register.php">REGISTER</a>
            </div>
            
        </nav>
      </div>
        
        <div class="main-content" style="margin-left: 400px;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p>Please dont use "<" and ">" characters.</p>
                <table>
                    <tr>
                        <td>Username:  *</td>
                        <td><input type="text" name="uname" style="border-radius: 25px; margin-right: 20px;"/><script>
                            <?php echo 'document.write("<font>'.$uname_error.'</font>");'; ?>
                        </script></td>
                    </tr>
                    <tr>
                        <td>Email:  *</td>
                        <td><input type="text" name="email" style="border-radius: 25px; margin-right: 20px;"/><script>
                            <?php echo 'document.write("<font>'.$email_error.'</font>");'; ?>
                        </script></td>
                    </tr>
                    <tr>
                        <td>Phone Number (with country code):</td>
                        <td><input type="text" name="pnum" style="border-radius: 25px; margin-right: 20px;"/><script>
                            <?php echo 'document.write("<font>'.$pnum_error.'</font>");'; ?>
                        </script></td>
                    </tr>
                    <tr>
                        <td>Password:  *</td>
                        <td><input type="password" name="sifre" style="border-radius: 25px; margin-right: 20px;"/><script>
                            <?php echo 'document.write("<font>'.$sifre_error.'</font>");'; ?>
                        </script></td>
                    </tr>
                    <tr>
                        <td>Device ID:  *</td>
                        <td><input type="text" name="did" style="border-radius: 25px; margin-right: 20px;"/><script>
                            <?php echo 'document.write("<font>'.$did_error.'</font>");'; ?>
                        </script></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Send Request" style="border-radius: 25px;"/></td>
                    </tr>
                </table>
            </form>
        </div>
        
    </div>

  
                <?php
                }else{
                    $sifre = password_hash($sifre, PASSWORD_DEFAULT);
                    $insert = mysql_query( "INSERT INTO `requests` (`Username`,`Email`,`PhoneNumber`,`Sifre`,`DeviceId1`,`Accepted`) VALUES ('".$uname."','".$email."','".$pnum."','".$sifre."','".$did."','0')", $connection);
                    
                    header("Location : index.php");
                }
                ?>

                

        <?php
            }else{
        ?>    
            <div style="top: 0px;">
      <div class="nav-container">
        <nav style="top: 0px;">
            <div class="menu-buttons">
                <a href="index.php" id="first-menu-button">HOME</a>
                <a href="buy.php">BUY</a>
                <a href="download.php">DOWNLOAD</a>
                <a href="register.php">REGISTER</a>
            </div>
           
        </nav>
      </div>
        
        <div class="main-content" style="margin-left: 400px;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p>Please dont use "<" and ">" characters.</p>
                <table>
                    <tr>
                        <td>Username:  *</td>
                        <td><input type="text" name="uname" style="border-radius: 25px;"/></td>
                    </tr>
                    <tr>
                        <td>Email:  *</td>
                        <td><input type="text" name="email" style="border-radius: 25px;"/></td>
                    </tr>
                    <tr>
                        <td>Phone Number (with country code):</td>
                        <td><input type="text" name="pnum" style="border-radius: 25px;"/></td>
                    </tr>
                    <tr>
                        <td>Password:  *</td>
                        <td><input type="password" name="sifre" style="border-radius: 25px;"/></td>
                    </tr>
                    <tr>
                        <td>Device ID:  *</td>
                        <td><input type="text" name="did" style="border-radius: 25px;"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Send Request" style="border-radius: 25px;"/></td>
                    </tr>
                </table>
            </form>
        </div>
        
    </div>

 
          <?php 
                }

                /*
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p>Please dont use "<" and ">" characters.</p>
                <table>
                    <tr>
                        <td>Username:  *</td>
                        <td><input type="text" name="uname"/></td>
                    </tr>
                    <tr>
                        <td>Email:  *</td>
                        <td><input type="text" name="email"/></td>
                    </tr>
                    <tr>
                        <td>Phone Number (with country code):</td>
                        <td><input type="text" name="pnum"/></td>
                    </tr>
                    <tr>
                        <td>Password:  *</td>
                        <td><input type="password" name="sifre"/></td>
                    </tr>
                    <tr>
                        <td>Device ID:  *</td>
                        <td><input type="text" name="did"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Send Request"/></td>
                    </tr>
                </table>
            </form>
                */
          ?>
    </body>
    
</html>



