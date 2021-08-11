<?php

require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "ADN123"), "Chevrolet", "Spark");

$uberX->PrintDataCar();

$uberPool = new UberPool("POK345", new Account("Andrea Ferran", "ADNA123"), "Dodge", "Attitude");
$uberPool->PrintDataCar();

?>