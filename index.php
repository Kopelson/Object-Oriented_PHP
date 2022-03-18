<?php

class Person {
    //constants
    const AVG_LIFE_SPAN = 80;
    //properties
    private $firstName;
    private $lastName;
    private $yearBorn;
    //methods
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($tempName){
        $this->firstName = $tempName;
    }

    protected function getFullName(){
        echo "Person->getFullName()".PHP_EOL;

        return $this->firstName." ".$this->lastName.PHP_EOL;
    }

    //constructors
    function __construct($tempFirst = "", $tempLast = "", $tempYear = ""){
        // echo "Person Constructor".PHP_EOL;
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }
}

class Gamer extends Person {
    public static $popularGame = "World of Warcraft";
    private $gamerTag = "Kope";

    public function getGamerTag(){
        return $this->gamerTag.PHP_EOL;
    }

    public function getCompleteName(){
        echo "Gamer->getFullName()".PHP_EOL;

        return $this->getFullName()." a.k.a (".$this->gamerTag.")".PHP_EOL;
    }

    public static function getPopularGame(){
        return self::$popularGame;
    }
}

$myObject = new Gamer("Ken", "Kopelson", 1992);

// -> Object Operator
// echo $myObject->firstName."\n";

// $myObject->firstName = "Kenny";

// echo $myObject->firstName."\n";

// :: Scope Resolution Operator
// echo $myObject::AVG_LIFE_SPAN."\n";
// echo Person::AVG_LIFE_SPAN."\n";

// $myObject->setFirstName("Kenneth");

// echo $myObject->getFirstName()."\n";

// echo $myObject->getCompleteName();

echo Gamer::getPopularGame();

?>