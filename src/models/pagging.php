<?php
    function pagging($images, $deleting_or_not) {
        if (isset($_SESSION['remembered_image_counter']) && (isset($_POST['deleteImagesAttempt']) || isset($_POST['go_to_delete_images']) || isset($_POST['page_deleting']))) {
            $how_many_pages = $_SESSION['remembered_image_counter']/5 + 1;
        }
        else {
            $how_many_pages = count($images)/5 + 1;
        }

        if($deleting_or_not == 0) {
            for($i = 1; $i<=$how_many_pages; $i++) {
                echo '<input type="submit" value="'.$i.'" name="page" />';
            }
        }
        else if ($deleting_or_not == 1){
             for($i = 1; $i<=$how_many_pages; $i++) {
                echo '<input type="submit" value="'.$i.'" name="page_deleting" />';
            }
        }
    };
?>