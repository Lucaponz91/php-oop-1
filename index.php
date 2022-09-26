<?php
class Movie {
    public $originalName;
    public $genre;
    public $language;

    function __construct($originalName, $genre, $language)
    {
        $this->originalName = $originalName;
        $this->genre = $genre;
        $this->setLanguage($language);
    }

    // public function setLanguage(){
    //     if (!isset($language)) {
    //         $this->language = 'en';
    //     } else {
    //         $this->language = $language;
    //     }
    // }
    public function setLanguage($language = false){
        if (!$language) {
            $this->language = 'en';
        } else {
            $this->language = $language;
        }
    }
    public function printMovie() {
        echo 'Il film è: ' . $this->originalName . '<br>' . "Il genere è: " . $this->genre . '<br>' . "E'stato girato in:" . $this->language ;
    }
}

$rocky = new Movie('rocky','action','it');


var_dump($rocky) ;
$rocky-> printMovie();


// $topGun = new Movie('topGun', 'action');