<?php

require_once "data/Manager.php";


$manager = new Manager();
$manager->name = "novan";
$manager->sayHello("stone");

$vp = new ViceManager();
$vp->name = "script";
$vp->sayHello("uhuy");
