<?php

use App\Controllers\UsersController;

include_once '../app/controllers/usersController.php';

switch ($_GET['users']):
    case 'login':
        UsersController\loginAction($connection, [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);
        break;
    default:
        UsersController\loginPageDisplay();
        break;
endswitch;

            
