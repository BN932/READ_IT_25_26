<?php
namespace App\Models\PostsModel;
use \PDO;
function findAll(PDO $connection, int $limit= 10): array {
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT :limit;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}