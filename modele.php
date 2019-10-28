<?php

$server = "localhost";
$user = "root";
$password = "root";
$dbname= "cours-b3";

$conn = new PDO("mysql:host=$server;dbname=$dbname",$user, $password);

function getEtudiantFormation(){

    global $conn;
$res = $conn -> query ("SELECT * FROM etudiant INNER JOIN formation ON etudiant.formation_id = formation.id");

return $res;

}

function getEtudiants(){
    global $conn;
    $res = $conn -> query ("SELECT * FROM etudiant");
    return $res;

    }

    function getEtudiantByName($nom){
        global $conn;
        $res = $conn -> query ("SELECT * FROM etudiant WHERE nom = " . $nom);
        return $res;
    }

?>