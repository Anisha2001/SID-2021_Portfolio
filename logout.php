<?php

    session_start();
    unset($_SESSION["email"]);
    session_destroy();
    header("Location:login.php?message=You have been successfully logged out!");

?>