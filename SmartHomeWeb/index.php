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
            ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <script src="jquery-2.1.4.min.js"></script>
                    <!-- Latest compiled and minified CSS -->
                    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

                    <!-- Optional theme -->
                    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->

                  <!-- Latest compiled and minified JavaScript -->
                    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

                    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

                    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.css">

                    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

                    <meta charset="utf-8" />
                    <script>
                        $(document).ready(function(){
                        $('[data-toggle="popover"]').popover(); 
                        });
                    </script>
                    <title></title>
                </head>
                <body style="background-color: #dbdbdb; background-size: 100%; background-repeat: no-repeat;">
                    <form action="giris.php" method="post" class="form-horiontal">
                        <table class="box1">
                            <tr class="form-group">
                                <td class="control-label col-sm-2">
                                Username:
                                </td>
                                <td class="col-sm-10">
                                    <input type="text" name="uname" style="border-radius: 25px;" />
                                </td>
                            </tr>
                            <tr class="form-group">
                                <td class="control-label col-sm-2">
                                Password:
                                </td>
                                <td class="col-sm-10">
                                    <input type="password" name="pass" style="border-radius: 25px;" />
                                </td>
                            </tr>
                            <tr class="form-group">
                                <td class="control-label col-sm-2">
                                Device Id:
                                </td>
                                <td class="col-sm-10">
                                    <input type="text" name="dpass" style="border-radius: 25px;" />
                                </td>
                
                            </tr>
                            <tr class="form-group">
                                <td>
                                </td>
                                <td>
                                    <input type="submit" value="Log In" style="border-radius: 25px;">
                                </td>
                            </tr>
                        </table>
                    </form><?php
          if(isset($_SESSION["permissions"])){
                    if($_SESSION["permissions"] == "ENDLESS"){
                        echo '<font color="red">Hi BOSS. Do u wanna go <a href = "/adminpanel/?pass=7465796d757230302e30372e3038">Admin Panel</a> ? </font>';
                    }else{
                        echo $content;
                    }
                }else{
                    echo $content;
                }?>
                </body>
            </html>
<?php
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
                        <input class="submit-button" type="submit" value="Log In" style="border-radius: 5px;">
                    </td>
                </tr>
            </table>
            </form>
            </div>
        </nav>
      </div>
        
        <div class="main-content">
            <!-----------------------------Main Content Here----------------------------------->
            <?php
                if(isset($_SESSION["permissions"])){
                    if($_SESSION["permissions"] == "ENDLESS"){
                        echo '<font color="red">Hi BOSS. Do u wanna go <a href = "/adminpanel/?pass=7465796d757230302e30372e3038">Admin Panel</a> ? </font>';
                    }else{
                        echo $content;
                    }
                }else{
                    echo $content;
                }
            ?>
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


