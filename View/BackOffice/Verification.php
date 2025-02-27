<?php
include '../../Model/TravelOffer.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $offre1 = new TravelOffer(1, $_POST['titre'], $_POST['destination'], $_POST['date_depart'], $_POST['date_retour'], $_POST['prix'], isset($_POST['disponible']), $_POST['categorie']);
    var_dump($offre1);
    $offre1->show();
}
?>
