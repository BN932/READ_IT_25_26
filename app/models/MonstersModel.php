<?php
namespace App\Models\MonstersModel;
use \PDO;
function findAll(PDO $connexion, int $limit): array {
    /*Ici viennent les requêtes SQL*/
    $sql = "SELECT monsters.*, monster_types.name AS type_name
            FROM monsters
            JOIN monster_types ON monsters.type_id = monster_types.id
            ORDER BY created_at DESC
            LIMIT $limit";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
function findOneById(PDO $connexion, int $id) {
    /*Ici viennent les requêtes SQL*/
    $sql = "SELECT monsters.*, monster_types.name AS type_name
            FROM monsters
            JOIN monster_types ON monsters.type_id = monster_types.id
            WHERE monsters.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
function searchByName(PDO $connexion, string $searchWord) {
    $sql = "CALL search_by_name('$searchWord');";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
function sizeMonstersList(PDO $connexion) {
    $sql = "SELECT COUNT(monsters.id)
            FROM monsters;";
    $rs = $connexion->query($sql);
    return $rs->fetchColumn();
}
function searchByFilters(PDO $connexion, array $filters) {
    if(($filters['rarete'])&&($filters['type'])) :
        $rarete = $filters['rarete'];
        $type = $filters['type'];
        $min_pv = (int) $filters['min_pv'];
        $max_pv = (int) $filters['max_pv'];
        $min_attack = (int) $filters['min_attaque'];
        $max_attack = (int) $filters['max_attaque'];
        $sql ="SELECT monsters.*, monster_types.name AS type_name, rareties.name
               FROM monsters
               JOIN monster_types ON monsters.type_id = monster_types.id
               JOIN rareties ON rareties.name = monsters.rarity
               WHERE rareties.name = '$rarete' AND monster_types.name = '$type';";
        $rs = $connexion->query($sql);
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    endif;
}