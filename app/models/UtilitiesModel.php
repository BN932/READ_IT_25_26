<?php
namespace App\Models\UtilitiesModel;
use \PDO;
function typesList(PDO $connexion) {
    $sql = "SELECT monster_types.name AS type_name
            FROM monster_types;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
function raretiesList(PDO $connexion) {
    $sql = "SELECT rareties.name AS rarety_name
            FROM rareties;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
