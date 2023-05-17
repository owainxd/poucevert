<?php

   include("database.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form 
       $login = mysqli_real_escape_string($db,$_POST['login']); 
       $password = mysqli_real_escape_string($db,$_POST['password']); 
   
       $sql = "SELECT * FROM users WHERE pseudo = '$login' and password = '$password'";
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       # $active = $row['active'];
       $count = mysqli_num_rows($result);
       session_start();
       if($count == 1) {
           $_SESSION['login'] = $login;
           header("location: profil.php");
        }else {
           $error = "Your login or Password is invalid";
           $_SESSION['errorMsg'] = $error;
           header("location: connexion.php");
        }
   mysqli_close($db);
   }
?>