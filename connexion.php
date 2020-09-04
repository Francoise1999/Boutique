<?php

if(isset($_GET['subscribe'])){
    $subscribe = $_GET['subscribe'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3b2d0094c0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/connexion.css">

    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="main">
                <img src="./img/shopping-1400845_640.png" alt="">
                <?php
                    if(isset($subscribe)){
                        if ($subscribe == 1) {
                            echo "<script>
                                M.toast({html: 'Vous avez bien été inscrit !'})
                            </script>";
                        } elseif ($subscribe == 0) {
                            echo "<script>
                                M.toast({html: ' Une erreur c\'est produite lors de l\'inscription !'})
                            </script>";
                        }
                    }
                ?>
                <div class="row">
                    <form class="sign-in col s12" method="post" action="login.php">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" name="username" type="text" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="icon_prefix" type="password" name="password" class="validate">
                                <label for="icon_prefix">Password</label>
                            </div>
                        </div>

                        <div class="remember-div">

                            <p>
                                <label>
                                    <input type="checkbox"  id="remember" name="remember" class="filled-in" />
                                    <span>Remember me</span>
                                </label>
                            </p>

                        </div>
                    </form>

                </div>
                <p class="f-pass"><a href="#">Forgot password ?</a></p>
                <p class="or">or</p>
                <p class="create-a"><a href="inscription.html">Create an account</a></p>
        </div>
        <div class="social">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
    </div>


</body>
</html>