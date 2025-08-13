<?php
    if(!isset($_SESSION['uid'])){
        $_SESSION['error'] = "Please login first";
        header("Location: /16-pdo/index.php");
    }