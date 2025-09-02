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

function findOneById(PDO $connection, int $id) {
    $sql = "SELECT *, authors.image as author_image, posts.image as post_image
            FROM posts
            JOIN authors ON authors.id = posts.author_id
            WHERE posts.id = :id;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}