<html>
    <head>

    </head>
    
    <body>
        <?php
            include "../includes/header.php";
            $_SESSION["Email"]="";
            $_SESSION["Password"]="";
            $_SESSION["id"]="";
            $_SESSION["is_admin?"]="";
            header("Location: login.php");
        ?>
    </body>
</html>