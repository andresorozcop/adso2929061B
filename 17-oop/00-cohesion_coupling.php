<?php 
    $title       = '00- High cohesion-Low coupling';
    $description = 'High cohesion-Low coupling';

    include 'template/header.php';
    // ejemplo sencillo OOP solo con Pokemon
    // alta cohesion: cada clase hace una cosa
    // bajo acoplamiento: se usan por fuera sin depender fuerte entre si

    // clase que guarda datos del pokemon y tiene metodos basicos
    class Pokemon {
        public $name;
        public $type;
        public $hp;

        function __construct($name, $type, $hp) {
            $this->name = $name;
            $this->type = $type;
            $this->hp   = $hp;
        }

        function info() {
            return $this->name . " (" . $this->type . ") HP:" . $this->hp;
        }

        function receiveDamage($dmg) {
            // resta vida sin bajar de 0
            $this->hp = $this->hp - $dmg;
            if ($this->hp < 0) {
                $this->hp = 0;
            }
        }

        function heal($amount) {
            $this->hp = $this->hp + $amount;
        }
    }
    
    // clase que hace acciones simples con pokemon
    class Trainer {
        public $name;

        function __construct($name) {
            $this->name = $name;
        }

        // bajo acoplamiento: solo usa los metodos publicos del pokemon
        function attack($attacker, $defender, $damage) {
            // muy simple: quitar vida al defender
            $defender->receiveDamage($damage);
            return $this->name . ": " . $attacker->name . " ataca a " . $defender->name . " por " . $damage . " de daño";
        }

        function healPokemon($pokemon, $amount) {
            $pokemon->heal($amount);
            return $this->name . " cura a " . $pokemon->name . " por " . $amount;
        }
    }

    // crear objetos (datos simples)
    $pikachu = new Pokemon("Pikachu", "Electrico", 100);
    $charmander = new Pokemon("Charmander", "Fuego", 90);
    $ash = new Trainer("Ash");

    // salida simple en html (la plantilla ya abre <section>)
    echo "<h2 style='margin-top:10px'>Demo Cohesion y Acoplamiento (Pokemon)</h2>";
    // conceptos basicos para mostrar al profe
    echo "<h3>Conceptos</h3>";
    echo "<p><b>Clases:</b> Pokemon, Trainer</p>";
    echo "<p><b>Atributos Pokemon:</b> name, type, hp</p>";
    echo "<p><b>Atributos Trainer:</b> name</p>";
    echo "<p><b>Metodos Pokemon:</b> info(), receiveDamage(), heal()</p>";
    echo "<p><b>Metodos Trainer:</b> attack(), healPokemon()</p>";
    echo "<p><b>Instanciacion / Objetos:</b> \$pikachu, \$charmander, \$ash</p>";

    echo "<h3>Objetos</h3>";
    echo "<ul>";
    echo "<li>Pokemon 1: " . $pikachu->info() . "</li>";
    echo "<li>Pokemon 2: " . $charmander->info() . "</li>";
    echo "</ul>";

    echo "<h3>Acciones</h3>";
    echo "<p>" . $ash->attack($pikachu, $charmander, 25) . "</p>";
    echo "<p>Despues del golpe: " . $charmander->info() . "</p>";
    echo "<p>" . $ash->healPokemon($charmander, 10) . "</p>";
    echo "<p>Despues de curar: " . $charmander->info() . "</p>";
    echo "<p style='font-size:14px;color:#ccc'>Nota: Trainer solo usa metodos publicos de Pokemon (receiveDamage, heal). Eso muestra bajo acoplamiento.</p>";

    include 'template/footer.php';