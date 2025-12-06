<?php
class Controller {
    public $load;
    public $model;

    public function __construct()
    {
        $this->load = new Load;
        $this->model = new Model;

        // obtengo la url para saber que hacer
        global $partes;
        $accion = isset($partes[0]) ? $partes[0] : 'home';
        
        // segun la accion hago algo diferente
        switch($accion) {
            case 'home':
                $this->mostrarInicio();
                break;
            case 'crear':
                $this->mostrarFormularioCrear();
                break;
            case 'guardar':
                $this->guardarPokemon();
                break;
            case 'ver':
                $this->verPokemon();
                break;
            case 'editar':
                $this->mostrarFormularioEditar();
                break;
            case 'actualizar':
                $this->actualizarPokemon();
                break;
            case 'eliminar':
                $this->eliminarPokemon();
                break;
            default:
                $this->mostrarInicio();
                break;
        }
    }
    
    // muestra la pagina principal con todos los pokemon
    public function mostrarInicio() {
        $pokemons = $this->model->listPokemons();
        $this->load->view('welcome.php', $pokemons);
    }
    
    // muestra el formulario para crear nuevo pokemon
    public function mostrarFormularioCrear() {
        $this->load->view('crear.php');
    }
    
    // guarda un nuevo pokemon en la base de datos
    public function guardarPokemon() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $fuerza = $_POST['fuerza'];
            $resistencia = $_POST['resistencia'];
            $velocidad = $_POST['velocidad'];
            $precision = $_POST['precision'];
            
            $this->model->crearPokemon($nombre, $tipo, $fuerza, $resistencia, $velocidad, $precision);
            
            // redirijo al inicio
            header('Location: /adso2929061B/18.1-MVC/?url=home');
            exit();
        }
    }
    
    // muestra un pokemon individual
    public function verPokemon() {
        global $partes;
        $id = isset($partes[1]) ? $partes[1] : 0;
        $pokemon = $this->model->obtenerPokemon($id);
        $this->load->view('ver.php', $pokemon);
    }
    
    // muestra el formulario para editar un pokemon
    public function mostrarFormularioEditar() {
        global $partes;
        $id = isset($partes[1]) ? $partes[1] : 0;
        $pokemon = $this->model->obtenerPokemon($id);
        $this->load->view('editar.php', $pokemon);
    }
    
    // actualiza un pokemon en la base de datos
    public function actualizarPokemon() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $fuerza = $_POST['fuerza'];
            $resistencia = $_POST['resistencia'];
            $velocidad = $_POST['velocidad'];
            $precision = $_POST['precision'];
            
            $this->model->actualizarPokemon($id, $nombre, $tipo, $fuerza, $resistencia, $velocidad, $precision);
            
            // redirijo al inicio
            header('Location: /adso2929061B/18.1-MVC/?url=home');
            exit();
        }
    }
    
    // elimina un pokemon de la base de datos
    public function eliminarPokemon() {
        global $partes;
        $id = isset($partes[1]) ? $partes[1] : 0;
        $this->model->eliminarPokemon($id);
        
        // redirijo al inicio
        header('Location: /adso2929061B/18.1-MVC/?url=home');
        exit();
    }

}