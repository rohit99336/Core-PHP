<?php

//refrence by => https://www.php.net/manual/en/language.oop5.decon.php
 
class MyDestructableClass 
{
    function __construct() {
        print "In constructor <br>";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "<br>";
    }

    public function message(){
        echo "message for clients <br>";
    }
}

$obj = new MyDestructableClass();
$obj->message();

?>