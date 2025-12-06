<?php 
// estos son los colores para los tipos de pokemon
$types = [
    "Normal"   => "badge badge-outline badge-neutral",
    "Fire"     => "badge badge-outline badge-error",
    "Water"    => "badge badge-outline badge-info",
    "Grass"    => "badge badge-outline badge-success",
    "Electric" => "badge badge-outline badge-warning",
    "Ice"      => "badge badge-outline badge-info",        
    "Fighting" => "badge badge-outline badge-secondary",   
    "Poison"   => "badge badge-outline badge-accent",      
    "Ground"   => "badge badge-outline badge-warning",     
    "Flying"   => "badge badge-outline badge-primary",
    "Psychic"  => "badge badge-outline badge-secondary",
    "Bug"      => "badge badge-outline badge-success",     
    "Rock"     => "badge badge-outline badge-neutral",
    "Ghost"    => "badge badge-outline badge-accent",
    "Dragon"   => "badge badge-outline badge-primary",
    "Dark"     => "badge badge-outline badge-neutral",
    "Steel"    => "badge badge-outline badge-primary",
    "Fairy"    => "badge badge-outline badge-accent"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Editar Pokemon</title>
</head>
<body>
  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-lg">
        <?php if ($data): ?>
          <h1 class="text-4xl font-bold mb-8">Editar Pokemon: <?= htmlspecialchars($data['name']) ?></h1>
          
          <form action="/adso2929061B/18.1-MVC/?url=actualizar" method="POST" class="space-y-4">
            <!-- campo oculto con el id -->
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            
            <!-- nombre del pokemon -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Nombre del Pokemon</span>
              </label>
              <input type="text" name="nombre" class="input input-bordered w-full" value="<?= htmlspecialchars($data['name']) ?>" required>
            </div>
            
            <!-- tipo del pokemon -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Tipo del Pokemon</span>
              </label>
              <select name="tipo" class="select select-bordered w-full" required>
                <option value="">Selecciona un tipo</option>
                <option value="Normal" <?= $data['type'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
                <option value="Fire" <?= $data['type'] == 'Fire' ? 'selected' : '' ?>>Fire</option>
                <option value="Water" <?= $data['type'] == 'Water' ? 'selected' : '' ?>>Water</option>
                <option value="Grass" <?= $data['type'] == 'Grass' ? 'selected' : '' ?>>Grass</option>
                <option value="Electric" <?= $data['type'] == 'Electric' ? 'selected' : '' ?>>Electric</option>
                <option value="Ice" <?= $data['type'] == 'Ice' ? 'selected' : '' ?>>Ice</option>
                <option value="Fighting" <?= $data['type'] == 'Fighting' ? 'selected' : '' ?>>Fighting</option>
                <option value="Poison" <?= $data['type'] == 'Poison' ? 'selected' : '' ?>>Poison</option>
                <option value="Ground" <?= $data['type'] == 'Ground' ? 'selected' : '' ?>>Ground</option>
                <option value="Flying" <?= $data['type'] == 'Flying' ? 'selected' : '' ?>>Flying</option>
                <option value="Psychic" <?= $data['type'] == 'Psychic' ? 'selected' : '' ?>>Psychic</option>
                <option value="Bug" <?= $data['type'] == 'Bug' ? 'selected' : '' ?>>Bug</option>
                <option value="Rock" <?= $data['type'] == 'Rock' ? 'selected' : '' ?>>Rock</option>
                <option value="Ghost" <?= $data['type'] == 'Ghost' ? 'selected' : '' ?>>Ghost</option>
                <option value="Dragon" <?= $data['type'] == 'Dragon' ? 'selected' : '' ?>>Dragon</option>
                <option value="Dark" <?= $data['type'] == 'Dark' ? 'selected' : '' ?>>Dark</option>
                <option value="Steel" <?= $data['type'] == 'Steel' ? 'selected' : '' ?>>Steel</option>
                <option value="Fairy" <?= $data['type'] == 'Fairy' ? 'selected' : '' ?>>Fairy</option>
                <!-- tipos dobles -->
                <option value="Fire/Flying" <?= $data['type'] == 'Fire/Flying' ? 'selected' : '' ?>>Fire/Flying</option>
                <option value="Water/Psychic" <?= $data['type'] == 'Water/Psychic' ? 'selected' : '' ?>>Water/Psychic</option>
                <option value="Rock/Ground" <?= $data['type'] == 'Rock/Ground' ? 'selected' : '' ?>>Rock/Ground</option>
                <option value="Ghost/Poison" <?= $data['type'] == 'Ghost/Poison' ? 'selected' : '' ?>>Ghost/Poison</option>
                <option value="Electric/Steel" <?= $data['type'] == 'Electric/Steel' ? 'selected' : '' ?>>Electric/Steel</option>
                <option value="Water/Flying" <?= $data['type'] == 'Water/Flying' ? 'selected' : '' ?>>Water/Flying</option>
                <option value="Water/Ice" <?= $data['type'] == 'Water/Ice' ? 'selected' : '' ?>>Water/Ice</option>
                <option value="Grass/Poison" <?= $data['type'] == 'Grass/Poison' ? 'selected' : '' ?>>Grass/Poison</option>
                <option value="Bug/Flying" <?= $data['type'] == 'Bug/Flying' ? 'selected' : '' ?>>Bug/Flying</option>
              </select>
            </div>
            
            <!-- estadisticas del pokemon -->
            <div class="grid grid-cols-2 gap-4">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Fuerza</span>
                </label>
                <input type="number" name="fuerza" class="input input-bordered" min="1" max="255" value="<?= $data['strenght'] ?>" required>
              </div>
              
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Resistencia</span>
                </label>
                <input type="number" name="resistencia" class="input input-bordered" min="1" max="255" value="<?= $data['stamina'] ?>" required>
              </div>
              
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Velocidad</span>
                </label>
                <input type="number" name="velocidad" class="input input-bordered" min="1" max="255" value="<?= $data['speed'] ?>" required>
              </div>
              
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Precisión</span>
                </label>
                <input type="number" name="precision" class="input input-bordered" min="1" max="255" value="<?= $data['accuracy'] ?>" required>
              </div>
            </div>
            
            <!-- botones -->
            <div class="form-control">
              <button type="submit" class="btn btn-success w-full mb-2">Actualizar Pokemon</button>
              <a href="/adso2929061B/18.1-MVC/" class="btn btn-outline w-full">Cancelar</a>
            </div>
          </form>
        <?php else: ?>
          <h1 class="text-4xl font-bold mb-8">Pokemon no encontrado</h1>
          <p class="mb-6">El pokemon que buscas no existe o fue eliminado.</p>
          <a href="/adso2929061B/18.1-MVC/" class="btn btn-primary">Volver al inicio</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>
