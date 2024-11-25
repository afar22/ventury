<?php require "./comun/session_star.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "./comun/head.php";
    ?>

</head>
<body>
    <?php
        if(!isset($_GET["vista"]) || $_GET["vista"]=="")
        {
            $_GET["vista"]="login";
        }

        if(is_file("./vista/".$_GET["vista"].".php") && 
        $_GET["vista"]!="login" && $_GET["vista"]!="404")
        {
            include "./comun/navbar.php";

            include "./vista/".$_GET["vista"].".php";
            
            include "./comun/script.php";


        }else
        {
            if($_GET["vista"]=="login")
            {
                include "./vista/login.php";

            }else
            {
                include "./vista/404.php";

            }

        }

        
        
    
    ?>

</body>
</html>