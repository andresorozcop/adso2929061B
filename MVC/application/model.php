<?php

class Model extends DataBase {
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    // funcion para listar todos los pokemones
    public function listPokemons(){
        $stmt = $this->db->query("SELECT * FROM pokemons");
        return $stmt->fetchAll();
    }
    
    // funcion para agregar un nuevo pokemon
    public function addPokemon($name, $type, $strenght, $stamina, $speed, $accuracy, $trainer_id = null){
        $sql = "INSERT INTO pokemons (name, type, strenght, stamina, speed, accuracy, trainer_id) 
                VALUES (:name, :type, :strenght, :stamina, :speed, :accuracy, :trainer_id)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':name' => $name,
            ':type' => $type,
            ':strenght' => $strenght,
            ':stamina' => $stamina,
            ':speed' => $speed,
            ':accuracy' => $accuracy,
            ':trainer_id' => $trainer_id
        ]);
    }
    
    // funcion para obtener un pokemon por su id
    public function getPokemonById($id){
        $sql = "SELECT * FROM pokemons WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }
    
    // funcion para actualizar un pokemon
    public function updatePokemon($id, $name, $type, $strenght, $stamina, $speed, $accuracy, $trainer_id = null){
        $sql = "UPDATE pokemons SET 
                name = :name, 
                type = :type, 
                strenght = :strenght, 
                stamina = :stamina, 
                speed = :speed, 
                accuracy = :accuracy, 
                trainer_id = :trainer_id 
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':name' => $name,
            ':type' => $type,
            ':strenght' => $strenght,
            ':stamina' => $stamina,
            ':speed' => $speed,
            ':accuracy' => $accuracy,
            ':trainer_id' => $trainer_id
        ]);
    }
    
    // funcion para eliminar un pokemon
    public function deletePokemon($id){
        $sql = "DELETE FROM pokemons WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
    
    // funcion para obtener todos los entrenadores (para el select)
    public function getTrainers(){
        $stmt = $this->db->query("SELECT * FROM trainers ORDER BY name");
        return $stmt->fetchAll();
    }
}

