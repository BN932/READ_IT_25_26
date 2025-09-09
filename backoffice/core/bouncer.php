<?php

    if(!isset($_SESSION['user'])):
        header('Location: ' . PUBLIC_BASE_URL . 'users/login-form');        
    endif;