<?php

require_once 'Peugeot.php';
require_once 'Renault.php';

$data = ["portes" => 6, "make" => "C4"];

$peugeot = new Peugeot\Car($data);

echo "<br/>";

var_dump($peugeot);

// $renault = new Renault\Car;
