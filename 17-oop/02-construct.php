
<?php 
    $title       = '02- Construct';
    $description = 'Lorem ipsum dolor sit amet';

    include 'template/header.php';

    echo "<section>";

    class Playlist {
        # Attrs

        public $artist;
        public $album;
        public $year;
        public $song;
        
        # Construct Method
        public function __construct($artist, $album, $year, $song = 'Happy Birthday') {
            $this->artist = $artist;
            $this->album = $album;
            $this->year = $year;
            $this->song = $song;
        }
}

$pl = new Playlist('Juanes', 'La camisa negra', '1994', 'La tierra');

echo $pl->song;



    include 'template/footer.php';