<?php


include "Classes/Animal.php";
include "Interfases/IProduction.php";
include "Classes/Cow.php";
include "Classes/Chicken.php";
include "Classes/Barn.php";

$barn = new Barn();
$barn->GetAllProduction();