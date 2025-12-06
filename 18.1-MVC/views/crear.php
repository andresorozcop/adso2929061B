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
  <title>Agregar Nuevo Pokemon</title>
</head>
<body>
  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-lg">
        <h1 class="text-4xl font-bold mb-8">Agregar Nuevo Pokemon</h1>
        
        <form action="/adso2929061B/18.1-MVC/?url=guardar" method="POST" class="space-y-4">
          <!-- nombre del pokemon -->
          <div class="form-control">
            <label class="label">
              <span class="label-text">Nombre del Pokemon</span>
            </label>
            <input type="text" name="nombre" class="input input-bordered w-full" required>
          </div>
          
          <!-- tipo del pokemon -->
          <div class="form-control">
            <label class="label">
              <span class="label-text">Tipo del Pokemon</span>
            </label>
            <select name="tipo" class="select select-bordered w-full" required>
              <option value="">Selecciona un tipo</option>
              <option value="Normal">Normal</option>
              <option value="Fire">Fire</option>
              <option value="Water">Water</option>
              <option value="Grass">Grass</option>
              <option value="Electric">Electric</option>
              <option value="Ice">Ice</option>
              <option value="Fighting">Fighting</option>
              <option value="Poison">Poison</option>
              <option value="Ground">Ground</option>
              <option value="Flying">Flying</option>
              <option value="Psychic">Psychic</option>
              <option value="Bug">Bug</option>
              <option value="Rock">Rock</option>
              <option value="Ghost">Ghost</option>
              <option value="Dragon">Dragon</option>
              <option value="Dark">Dark</option>
              <option value="Steel">Steel</option>
              <option value="Fairy">Fairy</option>
              <!-- tipos dobles -->
              <option value="Fire/Flying">Fire/Flying</option>
              <option value="Water/Psychic">Water/Psychic</option>
              <option value="Rock/Ground">Rock/Ground</option>
              <option value="Ghost/Poison">Ghost/Poison</option>
              <option value="Electric/Steel">Electric/Steel</option>
              <option value="Water/Flying">Water/Flying</option>
              <option value="Water/Ice">Water/Ice</option>
              <option value="Grass/Poison">Grass/Poison</option>
              <option value="Bug/Flying">Bug/Flying</option>
            </select>
          </div>
          
          <!-- estadisticas del pokemon -->
          <div class="grid grid-cols-2 gap-4">
            <div class="form-control">
              <label class="label">
                <span class="label-text">Fuerza</span>
              </label>
              <input type="number" name="fuerza" class="input input-bordered" min="1" max="255" required>
            </div>
            
            <div class="form-control">
              <label class="label">
                <span class="label-text">Resistencia</span>
              </label>
              <input type="number" name="resistencia" class="input input-bordered" min="1" max="255" required>
            </div>
            
            <div class="form-control">
              <label class="label">
                <span class="label-text">Velocidad</span>
              </label>
              <input type="number" name="velocidad" class="input input-bordered" min="1" max="255" required>
            </div>
            
            <div class="form-control">
              <label class="label">
                <span class="label-text">Precisión</span>
              </label>
              <input type="number" name="precision" class="input input-bordered" min="1" max="255" required>
            </div>
          </div>
          
          <!-- botones -->
          <div class="form-control">
            <button type="submit" class="btn btn-success w-full mb-2">Guardar Pokemon</button>
            <a href="/adso2929061B/18.1-MVC/" class="btn btn-outline w-full">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
