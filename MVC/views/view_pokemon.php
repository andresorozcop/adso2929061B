<?php 
// aqui defino los colores para los tipos de pokemon - solo tipos con color
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

// obtengo el pokemon y el entrenador
$pokemon = $data['pokemon'] ?? [];
$trainer = $data['trainer'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Detalles del Pokemon</title>
</head>
<body>
  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
      <div class="max-w-lg">
        <h1 class="text-4xl font-bold mb-8">Detalles del Pokemon</h1>
        
        <!-- tarjeta con los datos del pokemon -->
        <div class="card bg-base-100 shadow-xl">
          <div class="card-body">
            <!-- nombre y id -->
            <h2 class="card-title text-2xl">
              <?= htmlspecialchars($pokemon['name']) ?>
              <div class="badge badge-outline">#<?= $pokemon['id'] ?></div>
            </h2>
            
            <!-- tipo -->
            <div class="py-2">
              <span class="font-bold">Tipo: </span>
              <?php 
              $pokemonTypes = explode('/', $pokemon['type']);
              foreach ($pokemonTypes as $type): 
                  $typeClass = $types[trim($type)] ?? 'badge badge-outline badge-neutral';
              ?>
                  <span class="<?= $typeClass ?>"><?= trim($type) ?></span>
              <?php endforeach; ?>
            </div>
            
            <!-- stats -->
            <div class="grid grid-cols-2 gap-4 py-4">
              <!-- fuerza -->
              <div class="stat">
                <div class="stat-title">Fuerza</div>
                <div class="stat-value text-lg"><?= $pokemon['strenght'] ?></div>
              </div>
              
              <!-- stamina -->
              <div class="stat">
                <div class="stat-title">Stamina</div>
                <div class="stat-value text-lg"><?= $pokemon['stamina'] ?></div>
              </div>
              
              <!-- velocidad -->
              <div class="stat">
                <div class="stat-title">Velocidad</div>
                <div class="stat-value text-lg"><?= $pokemon['speed'] ?></div>
              </div>
              
              <!-- precision -->
              <div class="stat">
                <div class="stat-title">Precision</div>
                <div class="stat-value text-lg"><?= $pokemon['accuracy'] ?></div>
              </div>
            </div>
            
            <!-- entrenador -->
            <div class="py-2">
              <span class="font-bold">Entrenador: </span>
              <?php if ($trainer): ?>
                <span class="badge badge-outline"><?= htmlspecialchars($trainer['name']) ?></span>
                <span class="text-sm text-gray-500">(Nivel <?= $trainer['level'] ?>)</span>
              <?php else: ?>
                <span class="text-gray-500">Sin entrenador</span>
              <?php endif; ?>
            </div>
            
            <!-- botones de accion -->
            <div class="card-actions justify-end mt-4">
              <a href="index.php?action=edit&id=<?= $pokemon['id'] ?>" class="btn btn-success">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg>
                Editar
              </a>
              <a href="index.php?action=delete&id=<?= $pokemon['id'] ?>" class="btn btn-error" onclick="event.preventDefault(); Swal.fire({title: '¿Estás seguro?',text: '¿Quieres eliminar este pokemon?',icon: 'warning',showCancelButton: true,confirmButtonColor: '#d33',cancelButtonColor: '#3085d6',confirmButtonText: 'Sí, eliminar'}).then((result) => {if (result.isConfirmed) { window.location.href = 'index.php?action=delete&id=<?= $pokemon['id'] ?>'; }})">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="#ffffff" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8t-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8t-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z"/></svg>
                Eliminar
              </a>
              <a href="index.php" class="btn btn-neutral">Volver</a>
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>
