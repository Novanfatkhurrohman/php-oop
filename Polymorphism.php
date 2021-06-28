<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("novan");
var_dump($company);
$company->programmer = new BackendProgrammer("novan");
var_dump($company);
$company->programmer = new FrontEndProgrammer("novan");
var_dump($company);


sayHelloProgrammer(new Programmer("Php"));
sayHelloProgrammer(new BackendProgrammer("Java"));
