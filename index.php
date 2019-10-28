<?php

require ("modele.php");
require ("view.php");

if(!isset($_GET["id"])){
    $res = getEtudiantFormation();
    render_all($res);
} else {
    $etudiantById = getEtudiants($_GET["id"]);
    render_all($etudiantById);
}

?>