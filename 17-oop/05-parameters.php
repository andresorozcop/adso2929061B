
<?php 
    $title       = '01- Hello World';
    $description = 'Lorem ipsum dolor sit amet';

    include 'template/header.php';

    class Country {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
    }

    class FifaWorldCup {
        private $country;
        private $year;

        private $winner;
        #Country & Year are mandatory

        #Winner is optional

        public function __construct($country, $year, $winner = 'Brazil') {
            $this->country = $country;
            $this->year = $year;
            $this->winner = $winner;

        }
        public function showEvent() {
            echo "<ul>
                    <li style='display: flex; flex-direction: column'>
                        <span><b>Country</b>{$this->country->name}</span>
                        <span><b></b>{$this->year}</span>
                    </li>
                </ul>";
        }
    }

    $country = new Country('Italy');
    $worldcup = new FifaWorldCup($country, 1994, 'Germany');
    $worldcup->showEvent();

    $country = new Country('USA');
    $worldcup = new FifaWorldCup($country, 1994);
    $worldcup->showEvent();

    $country = new Country('Italy');
    $worldcup = new FifaWorldCup($country, 1994, 'France');
    $worldcup->showEvent();

    $country = new Country('Italy');
    $worldcup = new FifaWorldCup($country, 1994, 'Italy');
    $worldcup->showEvent();



    include 'template/footer.php';