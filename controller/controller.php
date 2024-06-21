<?php
switch($action){
    case "galerie":
        include "./view/header.php";
        include "./view/galerie.php";
        include "./view/footer.php";
        break;

    case "comment":
        include "./view/publication.php";
        break;

    case "like":
        if($coeur=="regular"){
            $coeur="solid";
        }else if($coeur="solid"){
            $coeur="regular";
        }
        include "./view/header.php";
        include "./view/galerie.php";
        include "./view/footer.php";
        break;

    case "publier":
        break;

    case "compte":
        break;

    default:
        $titre = "Accueil";
        include "./view/header.php";
        include "./view/accueil.php";
        include "./view/footer.php";
        $coeur="regular";
        break;
}