<?php
use App\Controllers\UsersController;
include_once '../app/controllers/usersController.php';

switch($_GET['users']) :
    case 'logout':
            UsersController\logoutAction();
        break;
    case 'create':
            UsersController\createAction($connection, $_POST);      
        break;
    case 'new':
            UsersController\displayAddUserForm();
        break;
    case 'edit':
            UsersController\showFormAction($connection, $_GET['id']);
        break;
    case 'post':
            UsersController\postAction($connection, $_POST);
        break;
    default:
            UsersController\indexAction($connection);
endswitch;
