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
        <link rel="stylesheet" href="css/inscription.css">
        <title>Connexion</title>
    </head>
    <body>
        <div class="container">
            <div class="main">
                <img src="./img/shopping-1400845_640.png" alt="">
                <div class="row">
                    <form class="sign-in col s12" action="subscribe.php" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="fas fa-user-alt"></i>
                                <input type="text" name="username" id="username" placeholder="username" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="far fa-envelope"></i>
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" id="password" placeholder="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" id="conf-password" placeholder="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <input class="btn waves-effect waves-light" type="submit" value="Sign up">
                        </div>
                    
                    
                
                <p class="already">Already have an account.<a href="connexion.php" class="login-here">Login here</a></p>
                </form>
                </div>
                
            </div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>       
    </body>
</html>