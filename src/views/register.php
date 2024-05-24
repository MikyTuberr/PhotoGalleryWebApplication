

<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>Formularz Rejestracyjny</title>
	<link rel="stylesheet" href="style.css">
	
</head>

<body>
	<div>Wszystkie pola są obowiązkowe do wypełnienia</div>
    <span style="color:red; font-size: 13px;">Hasło i login muszą posiadać od 8 do 20 znaków!</span>
		<form method="post" action="register_action">
			
				<div><input type="text" name="email" placeholder="Adres e-mail"/></div> 
            <span style="color:red; font-size: 13px;">Login może się składać tylko z liter i cyfr (bez polskich znaków)!</span>
				<div><input type="text" name="login" placeholder="Login"/></div>
			
				<div><input type="password" name="password" placeholder="Hasło"/></div>
			
				<div><input type="password" name="repeatedpassword" placeholder="Powtórz hasło" /></div>
			
            <?php

			if(isset($_SESSION['user_already_exists'])) {
                echo $_SESSION['user_already_exists'];
            }
            else if(isset($_SESSION['ERROR'])) {
                echo $_SESSION['ERROR'];
            }

            ?>
			<div><input type="submit" name="registerattempt" value="Zarejestruj się "></div>
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

<?php

	unset($_SESSION['user_already_exists']);
	unset($_SESSION['ERROR']);

?>



