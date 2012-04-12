<?php
include_once("Book.php");

class ScienceFiction extends Book {
    private $name = null;
    private $author = null;
    private $genre = null;
    
    public function __construct($name, $author){
        $this->name = $name;
        $this->author = $author;
        $this->genre = 'science fiction';
    }

    public function getName(){
        return $this->name;
    }
    
    public function getAuthorName(){
        return $this->author;
    }
    
    public function getGenre(){
        return $this->genre;
    }
}