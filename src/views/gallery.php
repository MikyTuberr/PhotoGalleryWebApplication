
<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>Galeria</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<form method="post" action="go_to_gallery" id="checkboximage">
		<div style="display: inline-block; width: 100%; text-align: center;">
            <?php
				if(isset($_SESSION['what_to_print'])) {
					print_images($images,$images_with_WM, $cursor, $images_iteration_counter,$deleting_or_not);
				}
            ?>
		</div>
		<div style="clear:both;"/>
        <div class="niewidzialny"></div>
        <button type="submit" form="checkboximage" name="rememberimages" value="rememberimages">ZAPAMIĘTAJ WYBRANE</button>
        
		<div class="niewidzialny"></div>
	</form>
	<form method="post">
        <?php
			pagging($images,$deleting_or_not);
        ?>
	</form>
	
	<a href="index.php#galeria">wróć do strony głównej</a>

    <footer>
        <p>Copyright 2022, Student, Piotr Lachowicz, 193630, Informatyka, grupa numer 7</p>
        <p>
            Źródła: <a href="https://www.wikipedia.org" target="_blank">www.wikipedia.org</a><a href="https://www.w3schools.com" target="_blank">www.w3schools.com</a>
        </p>
        <i>"Omnia possibilia, sunt apund Deum."</i><b>IHS</b><br />
        <i>"Nolite iudicare, et non iudicabimini."</i><b>IHS</b>

    </footer>


	<p style="text-align:center;">
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img style="border:0;width:88px;height:31px"
				 src="http://jigsaw.w3.org/css-validator/images/vcss"
				 alt="Poprawny CSS!">
		</a>
	</p> 
	
</body>

</html>