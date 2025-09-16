<?php
use App\Controllers\UsersController;
include_once '../app/controllers/usersController.php';

switch($_GET['users']) :
    case 'logout':
            UsersController\logoutAction();
        break;
    case 'create':
            UsersController\createUserAction($connection, $_POST);      
        break;
    case 'new':
            UsersController\displayAddUserForm();
        break;
    default:
            UsersController\indexAction($connection);
endswitch;