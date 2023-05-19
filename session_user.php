<?php
   include('database.php');

   session_start();
   
   $user = $_SESSION['login'];
   
   $ses_sql = mysqli_query($db,"select * from users where pseudo = '$user' or email = '$user' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $id = $row['id'];
   $nom = $row['nom'];
   $prenom = $row['prenom'];
   $pseudo = $row['pseudo'];
   $email = $row['email'];
   $password = $row['password'];
   $subscribed = $row['subscribed'];

   
   if(!isset($_SESSION['login'])){
      header("location: connexion.php");
      die();
   }
?>