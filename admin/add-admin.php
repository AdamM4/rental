<html>
    <head>
    <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    <?php
        $con = new mysqli("127.0.0.1","root","","rental");
        echo '<form method="POST">';
        $res = $con->query("SELECT * FROM user");
        $cos = $res->fetch_all();

        echo '<center><div class="blokGlowny"><h1>Rejestracja:</h1>
        <section class="box"><br> Imię: <input name="Imie"></section>
        <section class="box"><br> Nazwisko: <input name="Nazwisko"></section>
        <section class="box"><br> Email: <input name="Email"></section>
        <section class="box"><br> Hasło: <input name="Password" type="password"><br></section>';
        if($_POST!=NULL)
        {
            if($_POST['email']!="" && $_POST['password']!="")
            {
                $sqlquery = "INSERT INTO `user` VALUES ('".count($cos)."','".$_POST["Imie"]."','".$_POST["Nazwisko"]."', '".$_POST['Password']."', '".$_POST['Email']."', '0');";
                $con->query($sqlquery);
                header('location: login.php');
            }
        }
        echo '<section class="box"><br><input type="submit"></section><a href="login.php">Logowanie</a><br><br><a href="../index.php?page=1">Strona Główna</a</div></center>';
        echo '</form>';
    ?>

    </body>
</html>