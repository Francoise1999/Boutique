<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

try {

    $bdd = new PDO('mysql:dbname=boutique;host=localhost:3306','root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = "INSERT INTO user(username, password, email) VALUES ('".$username."','".$password."','".$email."')";
    $res = $bdd->exec($req);
    header("Location:/Boutique/connexion.php?subscribe=1");
} catch (PDOException $e) {
    echo "Une erreur s'est produite " . $e->getMessage();
    header("Location:/Boutique/connexion.php?subscribe=0");
}
?>