<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="togglevis.js"></script>
    <title>Page de connexion</title>
    <style>
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .login-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .mt-3 {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-page">
                    <div class="login-card">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/login.jpg" alt="Image de connexion" class="login-image mb-4">
                            </div>
                            <div class="col-md-6">
                                <h1 class="text-center mb-4">Connexion</h1>
                                <form action="connexion_controller.php" method="POST">
                                <div class="form-group">
                                        <?php
                                            session_start();
                                            if(isset($_SESSION['errorMsg'])) {
                                                $error = $_SESSION['errorMsg'];
                                                echo '<div class="alert alert-danger">' . $error . '</div>';
                                                unset($_SESSION['errorMsg']) ;
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Nom d'utilisateur ou adresse e-mail</label>
                                        <input type="text" class="form-control" name="login"
                                            placeholder="Entrez votre nom d'utilisateur ou adresse e-mail">
                                    </div>

                                    <div class="form-group">
                                        <label>Mot de passe</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="passwordInput"
                                                placeholder="Entrez votre mot de passe">
                                            <button type="button" class="btn btn-secondary password-toggle" onclick="togglePasswordVisibility()"
                                                id="passwordToggle">Afficher</button>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberCheck">
                                        <label class="form-check-label" for="rememberCheck">Se souvenir de moi</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Se connecter</button>
                                    <p class="text-center mt-3">Vous n'avez pas de compte ? <a
                                            href="inscription.php">Inscrivez-vous</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>