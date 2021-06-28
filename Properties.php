<?php

require_once  "data/Person.php";


$person = new Person("novan", null);
$person->name = "novan";
$person->address = null;

var_dump($person);

echo "Name : $person->name" . PHP_EOL;

$person2 = new Person("novan", null);
$person2->name = "php";

var_dump($person2);





//error
//$person2->name = [];
