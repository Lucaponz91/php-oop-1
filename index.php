<?php
class Movie {
    public $originalName;
    public $language;
    public $genre;

    function __construct($originalName, $language, $genre)
    {
        $this->originalName = $originalName;
        $this->setLanguage($language);
        $this->genre = $genre;
    }

    public function setLanguage($language){
        if (!isset($language)) {
            $this->language = 'en';
        }
    }
    public function printMovie() {
        echo 'Il film è: ' . $this->originalName . '<br>' . "E' stato girato in: " . $this->language . '<br>' . 'Il genere è:' . $this->genre ;
    }
}

$rocky = new Movie('rocky','en','action');


var_dump($rocky) ;
$rocky-> printMovie();


// $topGun = new Movie('topGun', 'action');