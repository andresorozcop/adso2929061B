<?php
    // esto es para que las urls sean amigables sin .php
    // obtengo la url y la separo en partes
    // si no hay parametro GET, uso 'home' por defecto
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    $partes = explode('/', $url);
    
    // cargo el sistema mvc
    require_once 'application/mvc.php';