<?php

namespace App\Controllers\UsersController;
use \PDO;

function logoutAction() {
    unset($_SESSION['user']);
    header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
}