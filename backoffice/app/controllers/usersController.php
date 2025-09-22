<?php
namespace App\Controllers\UsersController;
include_once '../app/models/usersModel.php';
use \PDO;
use App\Models\UsersModel;

function logoutAction(){
    UsersModel\logout();
}

function indexAction(PDO $connection){
    $users = UsersModel\findAll($connection);
    ob_start();
    global $content, $title;
    $title = "Liste des utilisateurs";
    include '../app/views/users/index.php';
    $content = ob_get_clean();

}

function showAction(PDO $connection, int $id) {
    $user = UsersModel\findOneById($connection, $id);
    ob_start();
    global $content, $title;
    $title = "Infos mises à jour de l'utilisateur";
    include '../app/views/users/show.php';
    $content = ob_get_clean();
}

function displayAddUserForm() {
    include '../app/views/users/new.php';
    
}

function showFormAction(PDO $connection, int $id){
    $user = UsersModel\findOneById($connection, $id);
    ob_start();
    global $content, $title;
    $title = "Modifier les infos d'un utilisateur";
    include '../app/views/users/edit.php';
    $content = ob_get_clean();
}


function createAction(PDO $connection, array $userInfo){
    $response = UsersModel\createOne($connection, $userInfo);
    header('Location: '.ADMIN_BASE_URL . 'users/index');
}

function postAction(PDO $connection, array $updateInfo){
    $backup = UsersModel\findOneById($connection, $updateInfo['id']);
    $updateInfo['password']? $updateInfo['password'] = password_hash($updateInfo['password'], PASSWORD_DEFAULT) : $updateInfo['password'] = $backup['password'];
    UsersModel\updateOne($connection, $updateInfo);
    showAction($connection, $updateInfo['id']);
}

function deleteAction(PDO $connection, int $id){
    UsersModel\deleteOne($connection, $id);
    header('Location: '.ADMIN_BASE_URL.'users/index');
}