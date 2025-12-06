<?php
class Controller {
    public $load;
    public $model;

    public function __construct()
    {
        $this->load = new Load;
        $this->model = new Model;

        // verifico que accion se va a ejecutar (método tradicional sin htaccess)
        $action = $_GET['action'] ?? 'list';
        
        // aqui decido que hacer segun la accion
        switch($action) {
            case 'list':
                $this->listPokemons();
                break;
            case 'add':
                $this->showAddForm();
                break;
            case 'store':
                $this->storePokemon();
                break;
            case 'view':
                $this->viewPokemon();
                break;
            case 'edit':
                $this->showEditForm();
                break;
            case 'update':
                $this->updatePokemon();
                break;
            case 'delete':
                $this->deletePokemon();
                break;
            default:
                $this->listPokemons();
                break;
        }
    }
    
    // funcion para mostrar la lista de pokemones
    public function listPokemons()
    {
        $pokemons = $this->model->listPokemons();
        $this->load->view('welcome.php', $pokemons);
    }
    
    // funcion para mostrar el formulario de agregar
    public function showAddForm()
    {
        $trainers = $this->model->getTrainers();
        $data = ['trainers' => $trainers];
        $this->load->view('add_pokemon.php', $data);
    }
    
    // funcion para guardar un nuevo pokemon
    public function storePokemon()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // obtengo los datos del formulario
            $name = $_POST['name'] ?? '';
            $type = $_POST['type'] ?? '';
            $strenght = $_POST['strenght'] ?? 0;
            $stamina = $_POST['stamina'] ?? 0;
            $speed = $_POST['speed'] ?? 0;
            $accuracy = $_POST['accuracy'] ?? 0;
            $trainer_id = !empty($_POST['trainer_id']) ? $_POST['trainer_id'] : null;
            
            // guardo el pokemon
            $this->model->addPokemon($name, $type, $strenght, $stamina, $speed, $accuracy, $trainer_id);
            
            // redirijo a la lista
            header('Location: index.php');
            exit;
        }
    }
    
    // funcion para ver los detalles de un pokemon
    public function viewPokemon()
    {
        $id = $_GET['id'] ?? 0;
        $pokemon = $this->model->getPokemonById($id);
        
        if ($pokemon) {
            // obtengo el entrenador si tiene
            $trainer = null;
            if ($pokemon['trainer_id']) {
                $trainers = $this->model->getTrainers();
                foreach ($trainers as $t) {
                    if ($t['id'] == $pokemon['trainer_id']) {
                        $trainer = $t;
                        break;
                    }
                }
            }
            
            $data = ['pokemon' => $pokemon, 'trainer' => $trainer];
            $this->load->view('view_pokemon.php', $data);
        } else {
            // si no existe el pokemon, redirijo a la lista
            header('Location: index.php');
            exit;
        }
    }
    
    // funcion para mostrar el formulario de editar
    public function showEditForm()
    {
        $id = $_GET['id'] ?? 0;
        $pokemon = $this->model->getPokemonById($id);
        
        if ($pokemon) {
            $trainers = $this->model->getTrainers();
            $data = ['pokemon' => $pokemon, 'trainers' => $trainers];
            $this->load->view('edit_pokemon.php', $data);
        } else {
            // si no existe el pokemon, redirijo a la lista
            header('Location: index.php');
            exit;
        }
    }
    
    // funcion para actualizar un pokemon
    public function updatePokemon()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'] ?? 0;
            
            // obtengo los datos del formulario
            $name = $_POST['name'] ?? '';
            $type = $_POST['type'] ?? '';
            $strenght = $_POST['strenght'] ?? 0;
            $stamina = $_POST['stamina'] ?? 0;
            $speed = $_POST['speed'] ?? 0;
            $accuracy = $_POST['accuracy'] ?? 0;
            $trainer_id = !empty($_POST['trainer_id']) ? $_POST['trainer_id'] : null;
            
            // actualizo el pokemon
            $this->model->updatePokemon($id, $name, $type, $strenght, $stamina, $speed, $accuracy, $trainer_id);
            
            // redirijo a la lista
            header('Location: index.php');
            exit;
        }
    }
    
    // funcion para eliminar un pokemon
    public function deletePokemon()
    {
        $id = $_GET['id'] ?? 0;
        
        // elimino el pokemon
        $this->model->deletePokemon($id);
        
        // redirijo a la lista
        header('Location: index.php');
        exit;
    }

}