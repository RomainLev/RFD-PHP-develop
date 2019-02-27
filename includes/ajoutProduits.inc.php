<h1>Ajouter un produit</h1>
<?php
if (isset($_POST['albator'])) {
    $reference = isset($_POST['reference']) ? $_POST['reference'] : "";
    $nomProduit = isset($_POST['nomProduit']) ? $_POST['nomProduit'] : "";
    $prix = isset($_POST['prix']) ? $_POST['prix'] : "";
    $nomPhoto = $_FILES['photo']['name'];
    $typePhoto = $_FILES['photo']['type'];
    $tmpPhoto = $_FILES['photo']['tmp_name'];
    $errorPhoto = $_FILES['photo']['error'];
    $sizePhoto = $_FILES['photo']['size'];
    if ($errorPhoto == 0) {
        $nomPhoto = suppraccents($nomPhoto);
        if (checkExtension("image", $nomPhoto) && checkMime("image", $typePhoto)) {
            $path = "./assets/photos/";
            $nomPhoto = $path . $nomPhoto;

            var_dump($nomPhoto);

            if (move_uploaded_file($tmpPhoto, $nomPhoto))
                echo "Deplacay";
            else
                echo "Pas deplacay";
        }
        else
            echo "Extension verbuten";

    }
    else {
        echo "<p>Môrche pô</p>";
    }
}


else {
    require_once "frmajoutProduits.php";
}