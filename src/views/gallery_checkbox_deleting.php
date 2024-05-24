
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8" />
    <title>Usuwanie zapamiętanych zdjęć</title>

    <link rel="stylesheet" href="style.css" />

</head>
<body>
    <form method="post" action="delete_images">
        <div style="display: inline-block; width: 100%; text-align: center;">
            <?php
                if(isset($_SESSION['what_to_print'])) {
                    print_images($images,$images_with_WM, $cursor, $images_iteration_counter,$deleting_or_not);
                }
            ?>
        </div>
        <div class="niewidzialny"></div>
        <input type="submit" value="USUŃ ZAZNACZONE Z ZAPAMIĘTANYCH" name="deleteImagesAttempt" />
    </form>
    <div class="niewidzialny"></div>
   <form method="post">
       <?php
            pagging($images, $deleting_or_not);
       ?>
       
    </form>
 
    <a href="index.php#galeria">wróć do strony głównej</a>
</body>

</html>