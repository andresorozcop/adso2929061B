<?php 
    $title       = '01- Hello World';
    $description = 'Lorem ipsum dolor sit amet';

    include 'template/header.php';

    class VideoGame {
        protected $name;
        protected $platform;
        protected $year;

        public function __construct($name, $platform, $year = null) {
            $this->name     = $name;
            $this->platform = $platform;
            $this->year = $year;
        }
        
        public function showVideoGame() {
            echo "<ul><li> Name: {$this->name} <br>
                       Platform: {$this->platform}";
            if ($this->year) {
                echo "<br>Year: {$this->year}";
            }
            echo "</li></ul>";
        }
    }
    
    class GameConsole extends VideoGame {
        public function showVideoGame() {
            echo "<ul><li> Name: {$this->name} <br>";
            parent::showVideoGame();
        }
    }
    
    // Using GameConsole class with just name and platform
    $gm = new GameConsole('Hollow Knight: Silk Song', 'Nintendo Switch');
    $gm->showVideoGame();
    $gm = new GameConsole('Metroid Prime 4', 'Nintendo Switch');
    $gm->showVideoGame();
    $gm = new GameConsole('Death Stranding 2', 'Play Station 5');
    $gm->showVideoGame();
    $gm = new GameConsole('Expedition 33', 'Xbox Series X');
    $gm->showVideoGame();
    
    // Using the base VideoGame class with year parameter
    class Game extends VideoGame {
        public function __construct($name, $platform, $year) {
            parent::__construct($name, $platform, $year);
        }
    }

    $gm = new Game('Halo Infinite', 'Xbox Series X', 2021);
    $gm->showVideoGame();
    $gm = new Game('God of War Ragnarok', 'Play Station 5', 2022);
    $gm->showVideoGame();
    $gm = new Game('Super Mario Wonder', 'Nintendo Switch', 2023);
    $gm->showVideoGame();


    include 'template/footer.php';