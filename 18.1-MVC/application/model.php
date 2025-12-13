<?php

class Model extends DataBase {
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    // lista todos los pokemon
    public function listPokemons(){
        $stmt = $this->db->query("SELECT * FROM pokemons");
        return $stmt->fetchAll();
    }
    
    // obtiene un pokemon por su id
    public function obtenerPokemon($id){
        $stmt = $this->db->prepare("SELECT * FROM pokemons WHERE id = ?");
        $stmt->execute([$id]);
        $resultado = $stmt->fetch();
        // para depurar: imprimo el resultado
        // var_dump($resultado);
        return $resultado;
    }
    
    // crea un nuevo pokemon
    public function crearPokemon($nombre, $tipo, $fuerza, $resistencia, $velocidad, $precision){
        $stmt = $this->db->prepare("INSERT INTO pokemons (name, type, strenght, stamina, speed, accuracy) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$nombre, $tipo, $fuerza, $resistencia, $velocidad, $precision]);
    }
    
    // actualiza un pokemon existente
    public function actualizarPokemon($id, $nombre, $tipo, $fuerza, $resistencia, $velocidad, $precision){
        $stmt = $this->db->prepare("UPDATE pokemons SET name = ?, type = ?, strenght = ?, stamina = ?, speed = ?, accuracy = ? WHERE id = ?");
        return $stmt->execute([$nombre, $tipo, $fuerza, $resistencia, $velocidad, $precision, $id]);
    }
    
    // elimina un pokemon
    public function eliminarPokemon($id){
        $stmt = $this->db->prepare("DELETE FROM pokemons WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

