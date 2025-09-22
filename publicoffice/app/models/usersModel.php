<?php
namespace App\Models\UsersModel;
use \PDO;

function checkAction(PDO $connection, array $credentials) {
    $sql = "SELECT *
            FROM users
            WHERE email = :email;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':email', $credentials['email'], PDO::PARAM_STR);
    $rs->execute();
    $user = $rs->fetch(PDO::FETCH_ASSOC);
    return password_verify($credentials['password'], $user['password'])? $user : false;
}


