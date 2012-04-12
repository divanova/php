<?php
include_once 'Fantasy.php';
include_once 'ScienceFiction.php';


class Factory{
    
    public function getBook($genre, $name, $author){
        $book = null;
        switch($genre){
            case 'fantasy':
                $book = new Fantasy($name, $author);
                break;
            case 'science fiction':
                $book = new ScienceFiction($name, $author);
                break;
        }
        return $book;
    }
}