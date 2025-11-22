
<?php 
    $title       = '01- Hello World';
    $description = 'Lorem ipsum dolor sit amet';

    include 'template/header.php';

    abstract class Database {
        protected $host = 'localhost:';
        protected $user = 'root:';
        protected $pass = '';
        protected $dbname = 'pokeadso';
        protected $connection;

    }


    include 'template/footer.php';