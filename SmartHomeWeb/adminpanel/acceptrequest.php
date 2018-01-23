<?php
    include_once("../ayarlar.php");
    $acceptednum = "1";
    if($_GET){
        if($_GET["pass"] == "7465796d757230302e30372e3038" && $_SESSION["permissions"] == "ENDLESS" && isset($_GET["id"])){
            $idget = $_GET["id"];
            $request_query = mysql_query("SELECT * FROM REQUESTS WHERE id = '".$idget."'");
            if(mysql_num_rows($request_query)){
                $request_query_array = mysql_fetch_array($request_query);
                extract($request_query_array);
                $update_requests = mysql_query("UPDATE requests SET Accepted = '".$acceptednum."' WHERE id = '".$idget."'");
                $insert_kullanicilar = mysql_query("INSERT INTO kullanicilar (Username,Email,PhoneNumber,Sifre,DeviceId1) values ('$Username','$Email','$PhoneNumber','$Sifre','$DeviceId1')");
                if($update_requests && $insert_kullanicilar){
                    echo 'Completed. <a href="/adminpanel/?pass=7465796d757230302e30372e3038">AdminPanel</a>';   
                }else{
                    echo 'Failed. <a href="/adminpanel/?pass=7465796d757230302e30372e3038">AdminPanel</a>';
                }
            }else{
                header("Location : ../index.php");
            }
        }else{
            header("Location : ../index.php");
        }
    }
?>

<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
-->