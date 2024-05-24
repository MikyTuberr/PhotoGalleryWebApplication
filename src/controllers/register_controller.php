<?php

    require('../MongoDB/DB.php');

    require_once '../models/mongodb_register.php';

    if((!empty($_POST['email'])) && (!empty($_POST['login'])) && (!empty($_POST['password'])) && (!empty($_POST['repeatedpassword']))) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['ERROR'] = '<span style="color:red; font-size: 17px;">Zły adres e-mail!</span>';
        }
        else if ((strlen($_POST['login'])<8) || (strlen($_POST['login'])>20)) {
			$_SESSION['ERROR'] = '<span style="color:red; font-size: 17px;">Login musi posiadać od 8 do 20 znaków!</span>';
		}
        else if (ctype_alnum($_POST['login'])==false) {
            $_SESSION['ERROR'] = '<span style="color:red; font-size: 17px;">Login może się składać tylko z liter i cyfr (bez polskich znaków)!</span>';
        }
        else if ((strlen($_POST['password'])<8) || (strlen($_POST['password'])>20)) {
			$_SESSION['ERROR'] = '<span style="color:red; font-size: 17px;">Hasło musi posiadać od 8 do 20 znaków!</span>';
		}
        else if($_POST['password'] != $_POST['repeatedpassword']) {
            $_SESSION['ERROR'] = '<span style="color:red; font-size: 17px;">Podane hasła się nie zgadzają!</span>';
        }
        else if (mongodb_register($_POST['email'], $_POST['login'], $_POST['password']) === true) {
            $_SESSION['ERROR'] = '<span style="color:blue; font-size: 17px;">Zostałeś zarejestrowany poprawnie!</span>';
        }
        else {
            $_SESSION['ERROR'] = mongodb_register($_POST['email'], $_POST['login'], $_POST['password']);
        }
    }
    else {
        $_SESSION['ERROR'] = '<span style="color:red; font-size: 17px;">Nie wszystkie pola zostały wypełnione!</span>';

    }

    require_once '../views/register.php';


?>