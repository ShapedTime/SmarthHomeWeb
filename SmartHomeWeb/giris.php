<?php
    include_once("ayarlar.php");
    $adminpass = "a193d453m783i903n648";
    $admindid = "0F0-000-F0F-000-0F0";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Smart Home</title>
    </head>
    <body>
        <?php
            if($_POST){
                
                $user = $_POST['uname'];
                $sfre = $_POST['pass'];
                $did = $_POST['dpass'];
                $users_query = mysql_query("SELECT * FROM kullanicilar WHERE Username = '".$user."' && DeviceId1 = '".$did."'");
                if(mysql_num_rows($users_query)){
                $users_query_array=mysql_fetch_array($users_query);
                extract($users_query_array);
                $verify = password_verify($sfre, $Sifre);
                
                    if($verify){
                        if($user == "Teymur_PC" && $sfre == $adminpass && $did == $admindid){
                            $_SESSION["permissions"] = "ENDLESS";
                            $_SESSION["username"] = $user;
                            $_SESSION["LastSignedIn"] = $LastSignedIn;
                            header("Location: index.php");
                        }else{
                            $_SESSION["username"] = $user;
                            $_SESSION["permissions"] = "1";
                            $_SESSION["LastSignedIn"] = $LastSignedIn;
                            header("Location: /myhome");
                        }
                        $_SESSION["did"] = $did;
                        echo 'Succesfully Logged In';
                    }else{
                        echo $sfre;
                        echo $Sifre;
                        echo '<font color="red">Password is wrong.</font>';
                    }
                }else{
                    echo 'Username or Device Id is wrong.';
                }
            }else{
                header('Refresh: 2; url=index.php');
                echo '<font color="red">Something went wrong. Please try again.</font>';
            }
        ?>
    </body>
</html>
