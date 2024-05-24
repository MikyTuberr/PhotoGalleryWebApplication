<?php
    session_start();

    require_once '../routing.php';

    $action_url = $_GET['action'];

    $controller_name = $routing[$action_url];

    require ($controller_name.'.php');
?>
