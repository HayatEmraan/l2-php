<?php
    // string type 
    $name = "hayat";

    // integer type
    $age = 18;

    // float type
    $weight = 53.6;

    // boolean type
    $isMale = true;

    // array type
    $colors = array ("red", "green", "blue");

    // object type
    class Person {
        public $name = "hayat";
        public $age = 18;
        public $weight;
        public function __construct($weight){
            $this->weight = $weight;
        }
    }

    $person = new Person(53.6);

    echo $person->name;

    // null type
    $isValueAssign = null;


    var_dump($name);
    echo "<br>";
    var_dump($age);
    echo "<br>";
    var_dump($weight);
    echo "<br>";
    var_dump($isMale);
    echo "<br>";
    var_dump($colors);
    echo "<br>";
    var_dump($person);
    echo "<br>";
    var_dump($isValueAssign);
    echo "<br>";

?>