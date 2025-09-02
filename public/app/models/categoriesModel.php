<?php

namespace App\Models\CategoriesModel;
use \PDO;
function findAll(PDO $connection): array {
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC;";
    $rs=$connection->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}