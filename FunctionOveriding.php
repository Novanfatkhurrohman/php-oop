<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "budi";
$manager->sayHello("novan");


$vp = new ViceManager();
$vp->name = "Kiki";
$vp->sayHello("stone");
