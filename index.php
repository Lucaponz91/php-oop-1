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
}

$rocky = new Movie('rocky','en','action');

var_dump($rocky) ;

// $topGun = new Movie('topGun', 'action');