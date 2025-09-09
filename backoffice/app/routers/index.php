<?php

use App\Controllers\PagesController;

if(isset($_GET['users'])):
    include_once '../app/routers/users.php';

else:
    include_once '../app/controllers/pagesController.php';
    PagesController\dashboardAction($connection);
endif;