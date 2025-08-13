<?php
    include '../config/app.php';
    include '../config/database.php';
    include '../config/security.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mejor amigo en casa - Edit</title>
    <link rel="stylesheet" href="<?=$css?>master.css">
</head>
<body>
    <main class="edit">
        <header>
            <h2>Modificar Mascota</h2>
            <a href="dashboard.php" class="back"></a>
            <a href="../close.php" class="close"></a>
        </header>
        <?php 
            $id = $_GET['id'];
            $pet = showPet($id, $conx);
        ?>
        <figure class="photo-preview">
            <img id="preview" src="../uploads/<?=$pet["photo"]?>" alt="">
        </figure>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Nombre" value="<?=$pet["name"]?>">
            <div class="select">
                <select name="breed_id">
                    <option value="<?=$pet["breed_id"]?>"><?=$pet["breed"]?></option>
                    <?php $breeds = listBreeds($conx) ?>
                    <?php foreach($breeds as $breed): ?>
                        <?php if($breed['id'] != $pet["breed_id"]): ?>
                            <option value="<?=$breed['id']?>"><?=$breed['name']?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="select">
                <select name="specie_id">
                    <option value="<?=$pet["specie_id"]?>"><?=$pet["specie"]?></option>
                    <?php $species = listSpecies($conx) ?>
                    <?php foreach($species as $specie): ?>
                        <?php if($specie['id'] != $pet["specie_id"]): ?>
                            <option value="<?=$specie['id']?>"><?=$specie['name']?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="select">
                <select name="sex_id">
                    <option value="<?=$pet["sex_id"]?>"><?=$pet["sex"]?></option>
                    <?php $sexes = listSexes($conx) ?>
                    <?php foreach($sexes as $sex): ?>
                        <?php if($sex['id'] != $pet["sex_id"]): ?>
                            <option value="<?=$sex['id']?>"><?=$sex['name']?></option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
            </div>
            <button class="update">Modificar</button>
        </form>
        <?php
            if($_POST) {
                $errors = 0;
                foreach ($_POST as $key => $value) {
                    if(empty($value)) {
                        $errors++;
                    }
                }
                
                if($errors == 0) {
                    $name      = $_POST['name'];
                    $specie_id = $_POST['specie_id'];
                    $breed_id  = $_POST['breed_id'];
                    $sex_id    = $_POST['sex_id'];
                    
                    if(updatePet($id, $name, $specie_id, $breed_id, $sex_id, $conx)) {
                        $_SESSION['message'] = "La Mascota $name se modificó con exito!";
                        echo "<script>window.location.replace('dashboard.php')</script>";
                    }
                } else {
                    $_SESSION['error'] = "Todos los campos son requeridos!";
                }
            }
            
            if(isset($_SESSION['error'])) {
                include 'error.php';
                unset($_SESSION['error']);
            }
        ?>
    </main>
    <script>
        const preview = document.querySelector('#preview')
        const upload  = document.querySelector('.upload')
        const photo   = document.querySelector('#photo')
 
        upload.addEventListener('click', function() {
            photo.click()
        })
 
        photo.addEventListener('change', function() {
            preview.src = window.URL.createObjectURL(this.files[0])
        })
    </script>
</body>
</html>