<?php

    if (isset($_POST['logout'])) {
        require_once '../models/logout.php';
            logout();
    }

    require_once '../views/main_page.php';
?>