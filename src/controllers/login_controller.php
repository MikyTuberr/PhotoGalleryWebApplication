<?php
    use MongoDB\BSON\ObjectID;

    require('../MongoDB/DB.php');

    require '../models/login_attempt.php';

    if( (!empty($_POST['nickattempt'])) && (!empty($_POST['passwordattempt']))) {

        $login_attempt = login_attempt();

        if(isset($login_attempt)) {
            if ($login_attempt == 1) {
                $_SESSION['login_attempt_succes'] = '<span style="color:blue; font-size: 17px;">Zostałeś zalogowany poprawnie!</span>';
            }
            else {
                $_SESSION['login_attempt_failed'] = '<span style="color:red; font-size: 17px;">Niepoprawne hasło!</span>';
            }
        }
        else if (!isset($login_attempt)) {
            $_SESSION['login_attempt_failed'] = '<span style="color:red; font-size: 17px;">Niepoprawny login!</span>';
        }
    }
    else {
        $_SESSION['login_attempt_failed'] = '<span style="color:red; font-size: 17px;">Wszystkie pola muszą zostać wypełnione!</span>';
    }


    require_once '../views/main_page.php';

?>

