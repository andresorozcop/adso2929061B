<?php 
    $title       = '02- Construct';
    $description = 'Special method that initializes a new object upon creation';

    include 'template/header.php';

    class Playlist {
        # Attrs
        public $name;
        public $artist = array();
        public $album = array();
        public $year = array();
        public $song = array();
        public $genre = array();
        public $image = array(); // Added missing property
        
        # Construct Method
        public function __construct($name) {
            $this->name = $name;
        }

        public function setplaylist($artist, $genre, $image, $year) {
            $this->artist[] = $artist;
            $this->genre[] = $genre;
            $this->image[] = $image;
            $this->year[] = $year;
        }

        public function getPlaylist() {
            echo "<h3>Playlist: $this->name</h3>
            <div style='display: flex; gap: 0.4rem; flex-direction: column'>";
                foreach($this->artist as $i => $artist) {
                    echo "<div style='display: flex; gap: 1rem; border: 2px solid #0009; padding: 1rem; margin-bottom: 1rem;'>
                            <img src='{$this->image[$i]}' width='160' alt='Album cover'>
                            <div>
                                <h4>Artist: {$artist}</h4>
                                <h5>Genre: {$this->genre[$i]}</h5>
                                <h5>Year: {$this->year[$i]}</h5>
                            </div>
                        </div>";
                }
            echo "</div>";
        }
}

$pl = new Playlist('Merry Christmas');
$pl->setplaylist('Mariah Carey', 'Pop Holiday', 'https://shorturl.at/usv3E', '1994');
$pl->setplaylist('Wham!', 'Pop', 'https://shorturl.at/usv3E', '1984');
$pl->setplaylist('Brenda Lee', 'Holiday', 'https://shorturl.at/OGBZI', '1958');
$pl->getPlaylist();



    include 'template/footer.php';