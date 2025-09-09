<?php

namespace App\Models\UsersModel;
use \PDO;

function checkAction(PDO $connection, array $credentials) {
    $sql = "SELECT *
            FROM users
            WHERE email = :email AND password = :password;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':email', $credentials['email'], PDO::PARAM_STR);
    $rs->bindValue(':password', $credentials['password'], PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}


