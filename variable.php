<?php
    session_start();
    $error = 0;
    $msg_error = "";
    if(isset($_SESSION['error_val']))
    {
        $error = $_SESSION['error_val'];
    }
    if(isset($_SESSION['error_msg']))
    {
        $msg_error = $_SESSION['error_msg'];
    }
?>