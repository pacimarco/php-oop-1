<?php

class Movie{
    public $title;
    public $year;
    public $genre;
    public $duration;
    public $originalLanguage;
    public $cast = 0;


public function __construct($title, $year, $genre, $duration, $originalLanguage){

    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
    $this->duration= $duration;
    $this->originalLanguage = $originalLanguage;
    
}

public function getPoster(){
    echo $this->title. ' , '. $this->year. ' , '. $this->genre. ' , '. $this->duration. ' , '. $this->originalLanguage."<br>";
}

}