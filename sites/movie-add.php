<html>
    <head>
    <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <center>
        <div class="blokGlowny">
    <?php
        include "../includes/header.php";
        echo '<form method="POST">';
        // $res = $con->query("SELECT * FROM film");
        // $cos = $res->fetch_all();

        echo '<h1>Dodaj film:</h1>
        <div class="details">Nazwa: <input name="nazwa"><br>
        Typ: <input name="typ"><br>
        Opis: <input name="opis"><br>';
        
        echo '<input type="submit">';
        echo '<br><a href="../index.php?page=1">Strona Główna</a>';
        echo '</form>';

        if($_POST!=NULL)
        {
            if($_POST["nazwa"]!="" && $_POST["typ"]!="" && $_POST["opis"]!="")
            {
                $sqlquery = "INSERT INTO `film` VALUES ('NULL','".$_POST['nazwa']."', '".$_POST['opis']."','".$_POST['typ']."');";
                $con->query($sqlquery);
                $wartosc=$con->insert_id;

                $sqlquery2 = "INSERT INTO `user_has_film` (User_id,Film_id) VALUES ('".$_SESSION["id"]."','".$wartosc."');";
                $con->query($sqlquery2);
                header('location: ../index.php?page=1');
            }
        }

    ?>
        </div>
        </center>
    </body>
</html>