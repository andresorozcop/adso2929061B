<?php 
    $title       = '09-class-abstract';
    $description = 'A class that cannot be instantiated, only extended from.';

    include 'template/header.php';

    // Clase abstracta que maneja la conexión a la base de datos
    abstract class Database {
        // Datos de conexión
        protected $host = 'localhost';
        protected $dbname = 'pokeadso';
        protected $user = 'root';
        protected $pass = '';
        protected $connection;

        // Método para conectar a la base de datos
        protected function connect() {
            try {
                $this->connection = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname}",
                    $this->user,
                    $this->pass
                );
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->connection;
            } catch(PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                return null;
            }
        }
    }

    // Clase que hereda de Database
    class PokemonModel extends Database {
        // Método para obtener todos los pokémones
        public function getPokemons() {
            $conn = $this->connect();
            $query = "SELECT * FROM pokemons ORDER BY id";
            $stmt = $conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // Crear instancia del modelo
    $pokemonModel = new PokemonModel();

    // Obtener datos de pokémones
    $pokemons = $pokemonModel->getPokemons();
?>

<div class="container mt-4">
    <h2>Lista de Pokémones</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pokemons as $pokemon): ?>
            <tr>
                <td><?php echo $pokemon['id']; ?></td>
                <td><?php echo htmlspecialchars($pokemon['name']); ?></td>
                <td><?php echo htmlspecialchars($pokemon['type']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'template/footer.php'; ?>