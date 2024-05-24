<?php
    function make_watermark($file_name,$path,$watermark,$file_extension) {
        $file_with_watermark_name = "withWM.".$file_name;
        copy($path.$file_name, $path.$file_with_watermark_name);

        if(in_array($file_extension, array("jpg"))) {

            $image = imagecreatefromjpeg($path.$file_name);
            $color = imagecolorallocate($image, 0, 0, 255);
            imagestring($image, 6, 0, 0, $watermark, $color);
            imagejpeg($image, $path.$file_with_watermark_name, 100);
        }
        else if(in_array($file_extension, array("png"))) {
            $image = imagecreatefrompng($path.$file_name);
            $color = imagecolorallocate($image, 0, 0, 255);
            imagestring($image, 6, 0, 0, $watermark, $color);
            imagepng($image, $path.$file_with_watermark_name, 9);
        }
    };

?>