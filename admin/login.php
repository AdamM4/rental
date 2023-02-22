<html>
    <head>
    <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <center>
        <div class="blokGlowny">
    <?php
        include "../includes/header.php";
        $con = new mysqli("127.0.0.1","root","","rental");
        echo '<form method="POST">';
        $res = $con->query("SELECT * FROM user");
        $cos = $res->fetch_all();

        echo '<h1>Logowanie Administratora:</h1>
        <section class="box"><br> Email: <input name="Email"></section>
        <section class="box"><br> Haslo: <input name="Password" type="Password"><br></section>';
        if($_POST!=NULL)
        {
            for($i=0;$i<count($cos);$i++)
            {
                if($_POST['Email']==$cos[$i][4] && $_POST['Password']==$cos[$i][3] && $cos[$i][5]==1)
                {
                    $_SESSION["Email"] = $_POST['Email'];
                    $_SESSION["id"] = $i;
                    $_SESSION["is_admin?"]= 1;
                    echo 'udalo sie zalogowac';
                    header("Location: ../index.php?page=1");
                }
            }
        }
        echo '<section class="box"><input type="submit"></section><br><br><a href="../index.php?page=1">Strona Główna</a>';
        echo '</form>';
    ?>
        </div>
        </center>
    </body>
</html>