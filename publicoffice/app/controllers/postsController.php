<?php
namespace App\Controllers\PostsController;

use \PDO;
use \App\Models\PostsModel;

function indexAction (PDO $connection, int $limit = 10) {
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connection, $limit);

    global $content, $title;
    $title="Latest posts";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();

}
function showAction(PDO $connection, int $id) : void {
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connection, $id);

    global $content, $title;
    $title="Latest posts";
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}