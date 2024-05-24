<?php

    require_once ('../../vendor/autoload.php');
    use MongoDB\BSON\ObjectID;
    require_once('../MongoDB/DB.php');

    function print_images($images,$images_with_WM, $iterator_for_i, $images_iteration_counter, $deleting_or_not) {
        $counter = 0;
        $db = get_db();
        $MongoImages = $db->images->find();

        foreach($MongoImages as $MongoImage) {
            for($i = $iterator_for_i; $i <= $images_iteration_counter; $i++) {

                if($counter == 5) {
                    break;
                }

                if((isset($_SESSION['remembered_image_counter']))  && ($deleting_or_not == 1)) {
                    if(count($images) == $i) {
                        break;
                    }
                }

                if(!empty($MongoImage['name']) && ($images[$i] == "images/thumbnail.".$MongoImage['name'])) {
                    $image = $images[$i];
                    $image_with_WM = $images_with_WM[$i];

                    if($deleting_or_not == 0) {
                        if (isset($_SESSION["imagen".$i]) && ($MongoImage['_id'] == $_SESSION["imagen".$i])) {
                            echo '<figure style="width:20%;">'.'<a href="'.$image_with_WM.'"target="_blank">'.'<img src="'.$image.'"alt="'.$image.'" />'.'</a>'.'<figcaption style="all: revert;;">Tytuł: '.$MongoImage['title']."<br /> Autor: ".$MongoImage['author'].'</figcaption>'.'<input type="checkbox" name="imagen'.$i.'" value="'.$MongoImage['_id'].'"'.'checked>'.'</figure>';
                        }

                        else {
                            echo '<figure style="width:20%;">'.'<a href="'.$image_with_WM.'"target="_blank">'.'<img src="'.$image.'"alt="'.$image.'" />'.'</a>'.'<figcaption style="all: revert;;">Tytuł: '.$MongoImage['title']."<br /> Autor: ".$MongoImage['author'].'</figcaption>'.'<input type="checkbox" name="imagen'.$i.'" value="'.$MongoImage['_id'].'">'.'</figure>';
                        }

                    }
                    else if ($deleting_or_not == 1) {
                        if (isset($_SESSION["imagen".$i]) && ($MongoImage['_id'] == $_SESSION["imagen".$i])) {
                            $counter++;
                            echo '<figure style="width:20%;">'.'<a href="'.$image_with_WM.'"target="_blank">'.'<img src="'.$image.'"alt="'.$image.'" />'.'</a>'.'<figcaption style="all: revert;;">Tytuł: '.$MongoImage['title']."<br /> Autor: ".$MongoImage['author'].'</figcaption>'.'<input type="checkbox" name="imagen'.$i.'" value="'.$MongoImage['_id'].'"'.'>'.'</figure>';
                        }

                    }
                }
            };
        };
    };

?>