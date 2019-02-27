<?php
session_start();


if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    echo "Vous êtes bien connectés";
}
    else {
        echo "Vous n'êtes pas connectés !";
}
//echo session_id();
date_default_timezone_set('Europe/Paris');
setlocale(LC_CTYPE, 'fr_FR.UTF-8');
include_once "./functions/debug.php";
include_once "./includes/pdo.php";
include_once "./functions/displayTitle.php";
include_once "./functions/suppraccents.php";
include_once "./includes/html.php";
include_once "./includes/header.php";
include_once "./functions/checkExtension.php";
include_once "./functions/checkMime.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = "accueil";
}

$path = "./includes/";
$contenu = glob($path . "*.inc.php");
$page = $path . $page . ".inc.php";

if (in_array($page, $contenu)) {
    include_once $page;
}

else {
    include_once "./includes/accueil.inc.php";
}

include_once "./includes/footer.php";