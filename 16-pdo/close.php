<?php
session_start();

unset($_SESSION['uid']);
session_unset();
session_destroy();

header("location: /16-pdo/index.php");