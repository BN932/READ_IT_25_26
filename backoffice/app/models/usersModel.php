<?php
namespace App\Models\UsersModel;
use \PDO;
function logout() {
    unset($_SESSION['user']);
    header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');
}

function findAll(PDO $connection){
    $sql = "SELECT*
            FROM users
            ORDER BY created_at DESC;";
    $rs = $connection -> query($sql);
    return $rs -> fetchAll(PDO::FETCH_ASSOC);
}