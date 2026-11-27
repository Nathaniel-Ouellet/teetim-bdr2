<?php
const HOTE = "db";
const UTIL = "teetim";
const MDP = "teetim";
const DB = "teetim";
    
function connection() {
    $dsn = "mysql:host=".HOTE.";dbname=".DB."charset=utf8mb4";
    return new PDO($dsn, UTIL, MDP, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
}

function requete() {

}

function creer() {

}

function modifier() {

}

function supprimer() {

}

?>