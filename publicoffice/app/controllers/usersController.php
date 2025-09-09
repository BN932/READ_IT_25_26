<?php
namespace App\Controllers\UsersController;

use \PDO;
use \App\Models\UsersModel;

function loginPageDisplay () {
    global $content, $title;
    $title="Login page";
    ob_start();
    include '../app/views/templates/partials/_loginPage.php';
    $content = ob_get_clean();
}

function loginAction(PDO $connection, array $credentials) {
        include '../app/models/usersModel.php';
        $user = UsersModel\checkAction($connection, $credentials);
        $_SESSION['user'] = $user;
        if ($user):
            header('Location: ' . ADMIN_BASE_URL . 'dashboard');
        else:
            header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
        endif;
}