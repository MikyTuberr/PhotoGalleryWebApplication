<?php

    require('../MongoDB/DB.php');

    require('../models/watermark.php');

    require('../models/thumbnail.php');

    require('../models/save_image_to_mongodb.php');

        if( ($_FILES['file']['size'] != 0) && (empty($_POST['watermark']) == false)) {
            $path = $_SERVER['DOCUMENT_ROOT']."/images/";
            $accept = ["jpg","png"];
            $file_extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

            $files = scandir($path);

            if(in_array($_FILES['file']['name'], $files)) {
                $_SESSION['error'] = '<span style="color:red; font-size: 12px;">plik "'.$_FILES['file']['name'].'" został już zapisany wcześniej w galerii!</span>';

            }
            else if (ctype_alnum($_POST['watermark']) == false) {
              $_SESSION['error'] = '<span style="color:red; font-size: 12px;">Znak wodny może się składać tylko z liter i cyfr (bez polskich znaków)!</span>';
            }
            else if ((strlen($_POST['watermark'])>20) || (strlen($_POST['author'])>20) || (strlen($_POST['titlee'])>20)) {
			$_SESSION['error'] = '<span style="color:red; font-size: 12px;">Maksymalnie możesz wprowadzić 20 znaków (w polach tytuł, znak wodny oraz autor)!</span>';
		    }
            else if(in_array($file_extension, $accept)) {

                if (isset($_FILES['file']['name']) && ($_FILES['file']['size'] < 1048576)) {
                    move_uploaded_file($_FILES['file']['tmp_name'],$path.$_FILES['file']['name']);

                    if(empty($_POST['titlee'])) $_POST['titlee'] = "brak tytułu";

                    if(empty($_POST['author'])) $_POST['author'] = "brak autora";

                    save_image_to_mongodb($_POST['titlee'],$_POST['author'],$_FILES['file']['name']);


                    make_watermark($_FILES['file']['name'],$path,$_POST['watermark'],$file_extension);


                    make_thumbnail($_FILES['file']['name'],$path,$_POST['watermark'],$file_extension);


                    $_SESSION['error'] = '<span style="color:blue; font-size: 12px;">plik "'.$_FILES['file']['name'].'" został pomyślnie przesłany</span>';
                }
                else {
                    $_SESSION['error'] =  '<span style="color:red; font-size: 12px;">nieprawidłowy rozmiar pliku! (maksymalny rozmiar 1MB)</span>';
                }

            }
            else {
                $_SESSION['error'] = '<span style="color:red; font-size: 12px;">nieprawidłowy format pliku!</span>';

            }
        }
        else if(($_FILES['file']['size'] == 0) && (empty($_POST['watermark']) == false)) {
            $_SESSION['error'] =  '<span style="color:red; font-size: 12px;">brak pliku, lub załączony plik jest pusty!</span>';

        }
        else if(($_FILES['file']['size'] != 0) && (empty($_POST['watermark']) == true)) {
            $_SESSION['error'] = '<span style="color:red; font-size: 12px;">brak nazwy znaku wodnego!</span>';

        }
        else {
            $_SESSION['error'] = '<span style="color:red; font-size: 12px;">brak pliku oraz nazwy znaku wodnego!</span>';

        }
    require_once '../views/main_page.php'
?>
