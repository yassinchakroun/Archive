<?php
class TravelOffer {
    private int $id;
    private string $titre;
    private string $destination;
    private string $date_depart;
    private string $date_retour;
    private float $prix;
    private bool $disponible;
    private string $categorie;

    public function __construct($id, $titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
        $this->id = $id;
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }

    public function show() {
        echo "<table border='1'>";
        echo "<tr><th>Title</th><td>{$this->titre}</td></tr>";
        echo "<tr><th>Destination</th><td>{$this->destination}</td></tr>";
        echo "<tr><th>Departure Date</th><td>{$this->date_depart}</td></tr>";
        echo "<tr><th>Return Date</th><td>{$this->date_retour}</td></tr>";
        echo "<tr><th>Price</th><td>{$this->prix}</td></tr>";
        echo "<tr><th>Disponibility</th><td>" . ($this->disponible ? 'Yes' : 'No') . "</td></tr>";
        echo "<tr><th>Category</th><td>{$this->categorie}</td></tr>";
        echo "</table>";
    }
}
?>
