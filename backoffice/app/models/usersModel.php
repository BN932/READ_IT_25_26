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

function createOne(PDO $connection, array $data){
    $psw_enc = password_hash($data['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users
            SET
            firstname = :firstname,
            lastname = :lastname,
            email = :email,
            password = :password,
            created_at = NOW();";
    $rs = $connection -> prepare($sql);
    $rs ->bindValue('firstname', $data['firstname'], PDO::PARAM_STR);
    $rs ->bindValue('lastname', $data['lastname'], PDO::PARAM_STR);
    $rs ->bindValue('email', $data['email'], PDO::PARAM_STR);
    $rs ->bindValue('password', $psw_enc, PDO::PARAM_STR);
    return $rs->execute();
}