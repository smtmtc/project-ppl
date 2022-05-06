<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: index.php?pesan=belum_login");
        exit();
    }
?>