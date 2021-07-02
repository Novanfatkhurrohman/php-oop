<?php

$array  = [
    "firstName" => "novan",
    "middleName" => "java",
    "lastName"  => "php"
];

$object = (object) $array;

var_dump($object);

echo "firstName $object->firstName" . PHP_EOL;
echo "middleName $object->middleName" . PHP_EOL;
echo "lastName $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);



require_once "data/Person.php";
$person = new Person("novan", "Tegal");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
