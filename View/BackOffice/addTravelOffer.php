<form method="POST" action="Verification.php">
    Title: <input type="text" name="titre" required><br>
    Destination: <input type="text" name="destination" required><br>
    Departure Date: <input type="date" name="date_depart" required><br>
    Return Date: <input type="date" name="date_retour" required><br>
    Price: <input type="number" name="prix" step="0.01" required><br>
    Disponibility: <input type="checkbox" name="disponible"><br>
    Category: <input type="text" name="categorie" required><br>
    <input type="submit" value="Submit">
</form>
