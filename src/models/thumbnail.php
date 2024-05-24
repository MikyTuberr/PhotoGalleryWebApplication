<?php
    function make_thumbnail($file_name,$path,$watermark,$file_extension) {
        $thumbnail_name = "thumbnail.".$file_name;
        copy($path.$file_name, $path.$thumbnail_name);
        $destination_image = imagecreatetruecolor(200, 125);
        list($width, $height) = getimagesize($path.$file_name);

        if(in_array($file_extension, array("jpg"))) {
            $source_image = imagecreatefromjpeg($path.$file_name);
            imagecopyresampled($destination_image, $source_image, 0, 0, 0, 0, 200, 125, $width, $height);
            imagejpeg($destination_image, $path.$thumbnail_name, 100);
        }
        else if (in_array($file_extension, array("png"))) {
            $source_image = imagecreatefrompng($path.$file_name);
            imagecopyresampled($destination_image, $source_image, 0, 0, 0, 0, 200, 125, $width, $height);
            imagepng($destination_image, $path.$thumbnail_name, 9);
        }
    };
?>