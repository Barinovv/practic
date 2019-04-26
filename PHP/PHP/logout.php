<?php
    require "includs/db.php";

    unset($_SESSION['logged_user']);
    header('Location: /');
?>
