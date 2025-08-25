<?php
namespace App\Controllers\MonstersController;
use \App\Models\MonstersModel;
use \PDO;
function indexAction(PDO $connexion, int $limit): void {
    include '../app/models/MonstersModel.php';
    $monsters = MonstersModel\findAll($connexion, $limit);

    global $content;
    ob_start();
    include '../app/views/monsters/index.php';
    $content = ob_get_clean();
}
function showAction(PDO $connexion, int $id): void {
    include '../app/models/MonstersModel.php';
    $monster = MonstersModel\findOneById($connexion, $id);

    global $content;
    ob_start();
    include '../app/views/monsters/show.php';
    $content = ob_get_clean();
}

