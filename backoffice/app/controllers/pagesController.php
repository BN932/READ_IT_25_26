<?php

namespace App\Controllers\PagesController;

use \PDO;

function dashboardAction(PDO $connection) 
{

    global $content, $title;
    $title="Backoffice page";
    ob_start();
    include '../app/views/pages/dashboard.php';
    $content = ob_get_clean();


}
