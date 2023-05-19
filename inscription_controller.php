<?php
    include("database.php");
    include("variable.php");
    /*
    echo "Data saved!";
    echo "NOM ".$_POST["nom"]."<br>";
    echo "PRENOM: ".$_POST["prenom"]."<br>";
    echo "PSEUDO: ".$_POST["pseudo"]."<br>";
    echo "EMAIL: ".$_POST["email"]."<br>";
    echo "PASSWORD: ".$_POST["password"]."<br>";
    echo "CONFIRMATION: ".$_POST["password_confirm"]."<br>";
    */


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $nom = mysqli_real_escape_string($db,$_POST['nom']);
    $prenom = mysqli_real_escape_string($db,$_POST['prenom']);
    $pseudo = mysqli_real_escape_string($db,$_POST['pseudo']);
    $email = mysqli_real_escape_string($db,$_POST['email']); 
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $sql_pseudo = "SELECT count(*) FROM users where pseudo = '$pseudo'";
    $sql_email = "SELECT count(*) FROM users where email = '$email'";
    $result_pseudo = mysqli_query($db, $sql_pseudo);
    $result_email = mysqli_query($db, $sql_email);
    $val_pseudo = mysqli_fetch_array($result_pseudo,MYSQLI_ASSOC);
    $val_email = mysqli_fetch_array($result_email,MYSQLI_ASSOC);
    if($_POST["password"] != $_POST["password_confirm"])
    {
        $_SESSION['error_val'] = 1;
        $_SESSION['error_msg'] = "password et confirmer doivent être identique";
        header("location: inscription.php");
    }
    elseif($val_pseudo['pseudo'] > 0)
    {
        $_SESSION['error_val'] = 1;
        $_SESSION['error_msg'] = "Ce pseudo existe deja!";
        header("location: inscription.php");
    }
    elseif($val_email['email'] > 0)
    {
        $_SESSION['error_val'] = 1;
        $_SESSION['error_msg'] = "Cett adresse email est deja utilisé!";
        header("location: inscription.php");
    }
    else
    {
        $sql = "INSERT INTO users ".
        "(nom, prenom, pseudo, email, password) ".
        "VALUES ". "('$nom', '$prenom', '$pseudo','$email','$password')";

        if(mysqli_query($db, $sql)) {
        echo "New record created successfully";
        header("location: connexion.php");
        } 

        else{
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        header("location: inscription.php");
        }
    }

   
mysqli_close($db);
}

?>