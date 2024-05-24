<?php
    function forget_checked_images($images) {
        $db = get_db();
        $MongoImages = $db->images->find();
        foreach($MongoImages as $MongoImage) {
            for($i=0;$i<count($images);$i++){
                if((!empty($_POST["imagen".$i]) && isset($_SESSION["imagen".$i]))) {
                    if(($_SESSION["imagen".$i] == $_POST["imagen".$i]) && ($MongoImage['_id'] == $_SESSION["imagen".$i])) {
                        $_SESSION['remembered_image_counter']--;
                        unset($_SESSION["imagen".$i]);
                    }
                }
            }
        }
    };


?>
