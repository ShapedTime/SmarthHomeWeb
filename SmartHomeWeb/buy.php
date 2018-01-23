<?php
    include_once("ayarlar.php");
    require_once "Mobile_Detect.php";
    $detect = new Mobile_Detect;
    //my password : 1}is$2b3:=V;
    
    $adminpass = "a193d453m783i903n648";
    $main_content_query = mysql_query("select `mydatabase`.`contents`.`id` AS `id`,`mydatabase`.`contents`.`name` AS `name`,`mydatabase`.`contents`.`content` AS `content` from `mydatabase`.`contents` where (`mydatabase`.`contents`.`name` = 'main') order by `mydatabase`.`contents`.`id` desc");
    $main_content_query_array = mysql_fetch_array($main_content_query);
    extract($main_content_query_array);
?>

    <?php
        if ( $detect->isMobile() ) {
            echo '<body>The mobile version of this site is under construction.<br /> Please use "Destkop View" of your browser to use this site or download our Smart Home app. </body>';
        }
        else{
    ?>
<html>

<head>

    <script src="jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
    <title>Smart Home</title>
   
</head>
 <body>

    <div style="top: 0px;">
      <div class="nav-container">
        <nav style="top: 0px;">
            <div class="menu-buttons">
                <a href="index.php" id="first-menu-button">HOME</a>
                <a href="buy.php">BUY</a>
                <a href="download.php">DOWNLOAD</a>
                <a href="register.php">REGISTER</a>
                <a class="login">Log In</a>
            </div>
            <div class="login-box">
            <form action="giris.php" method="post">
            <table class="box1">
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="text" name="uname" style="border-radius: 25px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="pass" style="border-radius: 25px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Device Id:
                    </td>
                    <td>
                        <input type="text" name="dpass" style="border-radius: 25px;" />
                    </td>
                
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Log In" style="border-radius: 25px;">
                    </td>
                </tr>
            </table>
            </form>
            </div>
        </nav>
      </div>
        
        <div class="main-content">
            <!-----------------------------Main Content Here----------------------------------->
            Coming Soon...
            <div><a href="mailto:teymur.hesenzade@hotmail.com?Subject=Smart Home" target="_top">Send request to Admin manually.</a></div>
            <!-----------------------------Main Content Here----------------------------------->
        </div>
        
    </div>

 <script type="text/javascript">
     $(function ()
     {
         $(".login").click(function ()
         {
             $(".login-box").slideToggle(2000);
         });
     });
    </script>
</body>
 <?php
        }
 ?>
</html>


