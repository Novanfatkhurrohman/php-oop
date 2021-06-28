<?php

require_once  "data/Person.php";


$person = new Person("novan", null);
$person->name  = "novan";
$person->sayHello("budi");


$stone = new Person("novan", null);
$stone->name = "stone";
$stone->sayHello(null);
$person->inf0();
