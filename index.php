<h5>create un file index.php in cui:</h5>
<ul>
    <li>è definita una classe ‘Movie’</li>
    <li>all'interno della classe sono dichiarate delle variabili d'istanza</li>
    <li>all'interno della classe è definito un costruttore</li>
    <li>all'interno della classe è definito almeno un metodo</li>
    <li>vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà</li>
</ul>

<?php 
    // Classe
    class Movie {
        public $title;
        public $subTitle;
        public $director;
        public $musics;
        public $producer;
        public $productionHouse;

        // funzione costruttore
        function __construct($_title, $_subTitle, $_director, $_musics, $_producer, $_productionHouse)
        {
            $this->title = $_title;
            $this->subtitle = $_subTitle;
            $this->director = $_director;
            $this->musics = $_musics;
            $this->producer = $_producer;
            $this->productionHouse = $_productionHouse;
        }
        // metodo
        function getProductionHouse()
        {
            return $this->productionHouse;
        }
        function setProductionHouse($_productionHouse)
        {
            $this->productionHouse = $_productionHouse;
        }

    }

    // Oggetto: istanziamento della classe
    $myMovie_1 = new Movie('Fast&Furious 9', 'The Fast Saga', 'Justin Lin', 'Brian Tyler', 'Vin Diesel', 'Universal Pictures');
    $myMovie_2 = new Movie('Fast&Furious 7', 'The Fast Saga', 'James Wan', 'Brian Tyler', 'Vin Diesel', 'Original Film'); 

    // stampo
    echo '<pre/>';
    var_dump($myMovie_1);
    var_dump($myMovie_2);

    //modifico la productionHouse in One Race Films
    $myMovie_1->setProductionHouse('One Race Films');
    //stampo la productionHouse modificata
    echo $myMovie_1->getProductionHouse();
    echo '<pre/>';
?>
