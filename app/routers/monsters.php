<?php

use \App\Controllers\MonstersController;
use \App\Controllers\PagesController;
use \App\Controllers\FiltersController;
include_once '../app/controllers/MonstersController.php';
include_once '../app/controllers/FiltersController.php';

switch (key($_GET)) :
    case 'texte':
        FiltersController\showResultNameSearch($connexion, $_GET['texte']);
        FiltersController\displayFiltersAction($connexion);
    break;
    case 'type':
    case 'rarete':
    case 'min_pv':
        FiltersController\multipleFiltersAction($connexion, $_GET);
        FiltersController\displayFiltersAction($connexion);
    break;
    default :
        switch ($_GET['monsters']) :
        
            case 'show':
                MonstersController\showAction($connexion, $_GET['id']);
                FiltersController\displayFiltersAction($connexion);
            break;
            default:
                MonstersController\indexAction($connexion, 10);
                FiltersController\displayFiltersAction($connexion);
            break;
        endswitch;
endswitch;
