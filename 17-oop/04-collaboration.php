
<?php 
    $title       = '04-Collaboration';
    $description = 'Objects working together by calling each others methods.';

    include 'template/header.php';


    class Evolve {
        public function evolvePokemon($origin, $evolution) {
            echo "<ul>      
                    <li style= 'display: flex; justify-content: space-between; aign-items: center;'>    
                        <span>{$origin}</span> <span> {$evolution} </span>     
                    </li>
                </ul>";
        }
    }

    class Pokemon {
        private $origin;
        private $evolution;
        private $collaboration;

        public function __construct($origin, $evolution) {
            $this->origin    = $origin;
            $this->evolution = $evolution;

            //Collaboration
            $this->collaboration = new Evolve;

        }

        public function nextLevel() {
            $this->collaboration->evolvePokemon($this->origin, $this->evolution);


        }

    }

$ev1 = new Pokemon('Pichu', 'Pikachu');
$ev1->nextLevel();
$ev1 = new Pokemon('Pikachu', 'Raichu');
$ev1->nextLevel();

$ev2 = new Pokemon('Bulbasaur', 'Ivysaur');
$ev2->nextLevel();
$ev2 = new Pokemon('Ivysaur', 'Venusaur');
$ev2->nextLevel();

$ev3 = new Pokemon('Squirtle', 'Wartortle');
$ev3->nextLevel();
$ev3 = new Pokemon('Wartortle', 'Blastoise');
$ev3->nextLevel();

$ev4 = new Pokemon('Charmander', 'Charmeleon');
$ev4->nextLevel();
$ev4 = new Pokemon('Charmeleon', 'Charizard');
$ev4->nextLevel();



    include 'template/footer.php';