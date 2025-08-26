<?php
use App\Controllers\PostsController;

    include_once '../app/controllers/postsController.php';
    PostsController\indexAction($connection, 10);
