<?php
include '../../Model/TravelOffer.php';
$offre1 = new TravelOffer(1, "Discover Paris", "Paris, France", "2024-10-15", "2024-10-22", 1200, true, "Cultural");
var_dump($offre1);
$offre1->show();
?>
