<?php
    require '../MongoDB/DB.php';

    require '../models/images_printing.php';

    require '../models/forget_checked_images.php';

    require '../models/pagging.php';

    require '../models/remember_checked_images.php';

    use MongoDB\BSON\ObjectID;


    $images = glob("images/thumbnail.*");
    $images_with_WM = glob("images/withWM.*");
    $cursor = 0;
    $images_iteration_counter = 4;

    if(isset($_POST['page'])) {
        $page = $_POST['page'];
    }
    else if (isset($_POST['page_deleting'])) {
        $page = $_POST['page_deleting'];
    }


    if(isset($_POST['deleteImagesAttempt']) || isset($_POST['go_to_delete_images']) || isset($_POST['page_deleting'])) {
        $deleting_or_not = 1;
    }
    else {
        $deleting_or_not = 0;
    }

    if(isset($page)) {
        if ($page == 1) {
            if(count($images) < 5) {
                $images_iteration_counter = count($images) - 1;
            }
            if(isset($_POST['deleteImagesAttempt']) || isset($_POST['go_to_delete_images']) || isset($_POST['page_deleting'])) {
                $images_iteration_counter = count($images) - 1;
            }
            $_SESSION['what_to_print'] = 1;

        }
        else {

            $cursor = ($page*5) - 5;
            $images_iteration_counter =  $page*5 - 1;

            if(count($images) <  $page*5) {
                $images_iteration_counter =  $cursor + (count($images) % 5) - 1;
            }
            if(isset($_POST['deleteImagesAttempt']) || isset($_POST['go_to_delete_images']) || isset($_POST['page_deleting'])) {
                $images_iteration_counter = count($images) - 1;
            }
            $_SESSION['what_to_print'] = 1;

        }
    }
    else {
        if(count($images) < 5) {
        $images_iteration_counter = count($images) - 1;
        }
        if(isset($_POST['deleteImagesAttempt']) || isset($_POST['go_to_delete_images']) || isset($_POST['page_deleting'])) {
            $images_iteration_counter = count($images) - 1;
        }
        $_SESSION['what_to_print'] = 1;
    }

    if(isset($_POST['rememberimages'])) {
        remember_checked_images($images);
    }

    if(isset($_POST['deleteImagesAttempt'])) {
        forget_checked_images($images);
    }


    if(isset($_POST['deleteImagesAttempt']) || isset($_POST['go_to_delete_images']) || isset($_POST['page_deleting'])) {

        require_once '../views/gallery_checkbox_deleting.php';
    }
    else {
        require_once '../views/gallery.php';
    }

?>