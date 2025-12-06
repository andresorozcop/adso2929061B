<?php 
// aqui defino los colores para los tipos de pokemon
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

// obtengo el pokemon y los entrenadores
$pokemon = $data['pokemon'] ?? [];
$trainers = $data['trainers'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Editar Pokemon</title>
</head>
<body>
  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-lg">
        <h1 class="text-4xl font-bold mb-8">Editar Pokemon</h1>
        
        <!-- formulario para editar pokemon -->
        <form action="index.php?action=update&id=<?= $pokemon['id'] ?>" method="POST" class="space-y-4">
          
          <!-- campo nombre -->
          <div class="form-control">
            <label class="label">
              <span class="label-text">Nombre del Pokemon</span>
            </label>
            <input type="text" name="name" value="<?= htmlspecialchars($pokemon['name']) ?>" class="input input-bordered w-full" required>
          </div>
          
          <!-- campo tipo -->
          <div class="form-control">
            <label class="label">
              <span class="label-text">Tipo del Pokemon</span>
            </label>
            <select name="type" class="select select-bordered w-full" required>
              <option value="">Selecciona un tipo</option>
              <option value="Normal" <?= $pokemon['type'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
              <option value="Fire" <?= $pokemon['type'] == 'Fire' ? 'selected' : '' ?>>Fire</option>
              <option value="Water" <?= $pokemon['type'] == 'Water' ? 'selected' : '' ?>>Water</option>
              <option value="Grass" <?= $pokemon['type'] == 'Grass' ? 'selected' : '' ?>>Grass</option>
              <option value="Electric" <?= $pokemon['type'] == 'Electric' ? 'selected' : '' ?>>Electric</option>
              <option value="Ice" <?= $pokemon['type'] == 'Ice' ? 'selected' : '' ?>>Ice</option>
              <option value="Fighting" <?= $pokemon['type'] == 'Fighting' ? 'selected' : '' ?>>Fighting</option>
              <option value="Poison" <?= $pokemon['type'] == 'Poison' ? 'selected' : '' ?>>Poison</option>
              <option value="Ground" <?= $pokemon['type'] == 'Ground' ? 'selected' : '' ?>>Ground</option>
              <option value="Flying" <?= $pokemon['type'] == 'Flying' ? 'selected' : '' ?>>Flying</option>
              <option value="Psychic" <?= $pokemon['type'] == 'Psychic' ? 'selected' : '' ?>>Psychic</option>
              <option value="Bug" <?= $pokemon['type'] == 'Bug' ? 'selected' : '' ?>>Bug</option>
              <option value="Rock" <?= $pokemon['type'] == 'Rock' ? 'selected' : '' ?>>Rock</option>
              <option value="Ghost" <?= $pokemon['type'] == 'Ghost' ? 'selected' : '' ?>>Ghost</option>
              <option value="Dragon" <?= $pokemon['type'] == 'Dragon' ? 'selected' : '' ?>>Dragon</option>
              <option value="Dark" <?= $pokemon['type'] == 'Dark' ? 'selected' : '' ?>>Dark</option>
              <option value="Steel" <?= $pokemon['type'] == 'Steel' ? 'selected' : '' ?>>Steel</option>
              <option value="Fairy" <?= $pokemon['type'] == 'Fairy' ? 'selected' : '' ?>>Fairy</option>
            </select>
          </div>
          
          <!-- campos de stats -->
          <div class="grid grid-cols-2 gap-4">
            <!-- fuerza -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Fuerza</span>
              </label>
              <input type="number" name="strenght" min="1" max="255" value="<?= $pokemon['strenght'] ?>" class="input input-bordered" required>
            </div>
            
            <!-- stamina -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Stamina</span>
              </label>
              <input type="number" name="stamina" min="1" max="255" value="<?= $pokemon['stamina'] ?>" class="input input-bordered" required>
            </div>
            
            <!-- velocidad -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Velocidad</span>
              </label>
              <input type="number" name="speed" min="1" max="255" value="<?= $pokemon['speed'] ?>" class="input input-bordered" required>
            </div>
            
            <!-- precision -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Precision</span>
              </label>
              <input type="number" name="accuracy" min="1" max="255" value="<?= $pokemon['accuracy'] ?>" class="input input-bordered" required>
            </div>
          </div>
          
          <!-- campo entrenador -->
          <div class="form-control">
            <label class="label">
              <span class="label-text">Entrenador (opcional)</span>
            </label>
            <select name="trainer_id" class="select select-bordered w-full">
              <option value="">Sin entrenador</option>
              <?php foreach ($trainers as $trainer): ?>
                <option value="<?= $trainer['id'] ?>" <?= $pokemon['trainer_id'] == $trainer['id'] ? 'selected' : '' ?>>
                  <?= htmlspecialchars($trainer['name']) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          
          <!-- botones -->
          <div class="form-control mt-6">
            <button type="submit" class="btn btn-success mb-2">Actualizar Pokemon</button>
            <a href="index.php" class="btn btn-neutral">Cancelar</a>
          </div>
          
        </form>
        
      </div>
    </div>
  </div>
</body>
</html>
