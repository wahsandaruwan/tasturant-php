
<!-- Database connectivity -->
<?php
    session_start();
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"tasturant");

?>


<!doctype html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Tasturant Login</title>
    <link rel="stylesheet" href="css/adminlogin.css">
    </head>

    <body>
        <div id="lgdiv">
            <center>
        <!-- Login Form -->
            <form action="" method="post" id="lgform" name="loginform">
                <h3>Login</h3>
                <p><input type="text" placeholder="Username" name="username" class="inlg"></p>
                <p><input type="password" placeholder="Password" name="pwd" class="inlg"></p>
                <p><input type="submit" name="submit1" value="Log in" class="bulg"></p>

            </form>
            </center>

        </div>

        <!-- Execute the query -->
        <?php
        
            if (isset($_POST["submit1"])){

                $res=mysqli_query($link,"select * from admin_login where username='$_POST[username]' && password='$_POST[pwd]'");

                while($row=mysqli_fetch_array($res)){

                $_SESSION["admin"] = $row["username"];
        ?>

        <!-- Navigate to admin dashboard -->
        <script>
        
            window.location = "add_item.php";       
            
        </script>

        <?php

                }
            }
        
        ?>

    </body>

</html>