<?php
use App\Controllers\PostsController;
include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($connection, $_GET['id']);
    break;
    default :
        PostsController\indexAction($connection, 10);
    endswitch;