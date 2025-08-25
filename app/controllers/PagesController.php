<?php
namespace App\Controllers\PagesController;
use \PDO;
use \App\Models\MonstersModel;
use \App\Models\UtilitiesModel;
function homeAction(PDO $connexion): void {
    
    global $content;
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}


