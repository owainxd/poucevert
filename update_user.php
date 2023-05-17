<?php
    include("database.php");
    include("session_user.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $new_nom = mysqli_real_escape_string($db,$_POST['nom']);
    $new_prenom = mysqli_real_escape_string($db,$_POST['prenom']);
    $new_pseudo = mysqli_real_escape_string($db,$_POST['pseudo']);
    $new_email = mysqli_real_escape_string($db,$_POST['email']); 

    $sql = "UPDATE users SET nom = '$new_nom', prenom = '$new_prenom', pseudo = '$new_pseudo', email = '$new_email' WHERE id = '$id' ";
    
if(mysqli_query($db, $sql)) {
    echo "Record modified successfully";
    $_SESSION['login'] = $new_pseudo;
    header("location: profil.php");
} 
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
    header("location: modification.php");
}
mysqli_close($db);
}

?>