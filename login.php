<?php
    include ("konekcija.php");

    if(isset($_POST)){
        $korisnickoIme = $_POST["korisnickoIme"];
        $lozinka = $_POST["lozinka"];

        $sql = "INSERT INTO login VALUES(null,'$korisnickoIme','$lozinka')";
        $konekcija->query($sql);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Prijava na sustav</title>
    </head>
    <body>

        <form action="" method="POST">
            <label>Korsnicko ime:</label>
            <input type = "text" name="korisnickoIme" placeholder="unesite korisnicko ime"/>
            <label>Lozinka:</label>
            <input type = "password" name="lozinka" placeholder="unesite lozinku"/>
            <input type = "submit" value="Registriraj se"/>
        </form>

    </body>
</html>
