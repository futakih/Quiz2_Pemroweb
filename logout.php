<?php
    session_start();
    session_destroy();
    setcookie('login','false');
    header("location:login.php?pesan=logout");
?>