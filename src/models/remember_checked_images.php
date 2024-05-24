<?php
    function remember_checked_images($images) {
            for($i=0;$i<count($images);$i++){
                if(!empty($_POST["imagen".$i])) {
                    if(!isset($_SESSION["imagen".$i])) {
                        $_SESSION["imagen".$i] = $_POST["imagen".$i];
                        if(!isset($_SESSION['remembered_image_counter'])) {
                            $_SESSION['remembered_image_counter'] = 1;
                        }
                        else {
                            $_SESSION['remembered_image_counter']++;
                        }
                    }
                }
            }
    };

?>