<?php
namespace App\Controllers\UsersController;
include_once '../app/models/usersModel.php';
use \PDO;
use App\Models\UsersModel;

function logoutAction(){
    UsersModel\logout();
}

function indexAction($connection){
    $users = UsersModel\findAll($connection);
    ob_start();
    global $content, $title;
    $title = "Liste des utilisateurs";
    include '../app/views/users/index.php';
    $content = ob_get_clean();

}

function displayAddUserForm() {
    include '../app/views/users/new.php';
}

function createAction(PDO $connection, array $userInfo){
    $response = UsersModel\createOne($connection, $userInfo);
    header('Location: '.ADMIN_BASE_URL . 'users/index');
}