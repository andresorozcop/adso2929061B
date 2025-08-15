<?php
    include '../config/app.php';
    include '../config/database.php';
    include '../config/security.php';

    if($_GET){
        $id = $_GET['id'];

        // Buscar info de la mascota
        $pet = showPet($id, $conx);

        // Eliminar la foto
        unlink('../uploads/' . $pet['photo']);

        // Eliminar el registro de la mascota
        if(deletePet($id, $conx)){
            $_SESSION['message'] = "La Mascota ha sido eliminada con exito!";
            echo "<script>window.location.replace('dashboard.php')</script>";
        }
    }