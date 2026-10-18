
<?php
$produit = "Clavier";
$quantite = 3;
$prix = 120.50;
$disponible = true;

echo "<h2>Valeurs avec echo</h2>";
echo "Produit : " . $produit . "<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Prix : " . $prix . "<br>";
echo "Disponible : ";
echo $disponible;

echo "<h2>Types avec var_dump()</h2>";
echo "<pre>";

var_dump($produit);
var_dump($quantite);
var_dump($prix);
var_dump($disponible);

echo "</pre>";

echo "<p>
Réponse : echo affiche true sous la forme 1.
var_dump() affiche le type bool et la valeur bool(true).
</p>";
?>
