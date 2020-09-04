<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    try {

        $bdd = new PDO('mysql:dbname=boutique;host=localhost:3308','root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = "SELECT * FROM user WHERE (username = '".$username."' AND password = '".$password."')";
        $res = $bdd->query($req);
        $user = $res->fetch();

        if($user) {
            session_start();
            $_SESSION['id'] = $user[0];
            $_SESSION['username'] = $user[1];

            header("Location:/Boutique/");
        } else {
            header("Location:/Boutique/connexion.html?error=1");
        }

    } catch (PDOException $e) {
        echo "Une erreur s'est produite " . $e->getMessage();
    }
?>