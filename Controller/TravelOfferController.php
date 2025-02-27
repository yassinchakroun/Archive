<?php
include '../Model/TravelOffer.php';
class TravelOfferController {
    public function showTravelOffer(TravelOffer $offer) {
        $offer->show();
    }
}
?>
