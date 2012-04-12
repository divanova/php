<?php
/**
 * very simple singleton :)
 * @author Damyana
 */
class Singleton {
    
    private static $instance = null;

    //locks the __construct in order no objects to be created 
    private function __construct() {}
  
     //locks the __clone method in order no clones to be created 
    private function __clone() {}

    //returns instance of the class 
    public function getInstance()
    {
        if(self::$instance==NULL)
            self::$instance = new Singleton();
        return self::$instance;
    }
    
    public function printSomeText()
    {
        echo "This is my singleton class <br>";
    }
}

$o1 = Singleton::getInstance();
$o2 = Singleton::getInstance();
if($o1 === $o2)
    echo "y <br>";
else echo "n <br>";
$o2->printSomeText();
//Fatal errors - new objects and clones can not be created
$o3 = new Singleton();
$o4 = clone $o2;

