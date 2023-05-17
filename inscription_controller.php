<?php
    include("database.php");
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
mysqli_close($db);
}

?>