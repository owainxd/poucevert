<?php
    include("variable.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <title>Pouce vert</title>
</head>

<body>
    <div class="cointainer mt-4">
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <h2>Formulaire d'inscription</h2>
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                    <form action="inscription_controller.php" method ="POST">
                        <div class="row g-3">
                            <div class="col mb-3">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control"  placeholder="nom"
                                    required>
                            </div>
                            <div class="col mb-3">
                                <label>Prénom</label>
                                <input type="text" name="prenom" class="form-control" 
                                    placeholder="prenom" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" 
                                placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label>Pseudo</label>
                            <input type="text" name="pseudo" class="form-control" 
                                placeholder="pseudo" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" name="password" class="form-control"
                                placeholder="mot de passe" required>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirmer</label>
                            <input type="text" name="password_confirm" class="form-control"
                                aria-labelledby="passwordHelpBlock" placeholder="confirmer le mot de passe" required>
                        </div>
                        <div class="text-center">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-secondary" type="reset">Anuler</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" type="submit">Valider</button>
                                </div>
                            </div>
                            <?php
                                if($error == 1)
                                {
                                    echo ($msg_error);
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md">
                <img src="images/undraw_Blooming_re_2kc4.png" alt="" width="90%">
            </div>
        </div>
    </div>
</body>

</html>