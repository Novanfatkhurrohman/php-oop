<?php


require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("novan");
$person->hello("kiki");

$person->name = "eko";
var_dump($person);

$person->run();
