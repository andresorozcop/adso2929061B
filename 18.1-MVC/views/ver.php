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
  <title>Ver Pokemon</title>
</head>
<body>
  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-lg">
        <?php if ($data): ?>
          <h1 class="text-5xl font-bold mb-4"><?= htmlspecialchars($data['name']) ?></h1>
          
          <!-- tipo del pokemon -->
          <div class="mb-6">
            <?php 
            $pokemonTypes = explode('/', $data['type']);
            foreach ($pokemonTypes as $type): 
                $type = trim($type);
                if (isset($types[$type])): ?>
                    <span class="<?= $types[$type] ?> text-lg"><?= $type ?></span>
                <?php endif; 
            endforeach; ?>
          </div>
          
          <!-- estadisticas -->
          <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
              <h2 class="card-title text-2xl mb-4">Estadísticas</h2>
              
              <div class="stats stats-vertical lg:stats-horizontal shadow w-full">
                <div class="stat">
                  <div class="stat-title">Fuerza</div>
                  <div class="stat-value text-primary"><?= $data['strenght'] ?></div>
                </div>
                
                <div class="stat">
                  <div class="stat-title">Resistencia</div>
                  <div class="stat-value text-secondary"><?= $data['stamina'] ?></div>
                </div>
                
                <div class="stat">
                  <div class="stat-title">Velocidad</div>
                  <div class="stat-value text-accent"><?= $data['speed'] ?></div>
                </div>
                
                <div class="stat">
                  <div class="stat-title">Precisión</div>
                  <div class="stat-value"><?= $data['accuracy'] ?></div>
                </div>
              </div>
              
              <!-- botones de accion -->
              <div class="card-actions justify-end mt-6">
                <a href="/adso2929061B/18.1-MVC/?url=editar/<?= $data['id'] ?>" class="btn btn-primary">Editar</a>
                <a href="/adso2929061B/18.1-MVC/?url=eliminar/<?= $data['id'] ?>" class="btn btn-error" onclick="return confirm('¿Estás seguro de eliminar este pokemon?')">Eliminar</a>
                <a href="/adso2929061B/18.1-MVC/" class="btn btn-outline">Volver</a>
              </div>
            </div>
          </div>
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
