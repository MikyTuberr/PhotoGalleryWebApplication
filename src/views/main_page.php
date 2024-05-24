

<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>Moje Hobby</title>

	<meta name="description" content="music, hobby">
	<meta name="keywords" content="meloman, muzyka, rock, pop, alternative music, favourite music, ulubiona muzyka, hobby, moje hobby, mine hobby">
	<meta name="author" content="Piotr Lachowicz, student PG s193630, informatyka, grupa dziekańska numer 7">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.min.css">
	<link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.theme.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

	<script>
		function pierwsza() {
			var wyslij = document.getElementById('wyslij');
			wyslij.addEventListener("click", save, false);
            wyslij.addEventListener("click", save1, false);
            document.getElementById('input').reset();
            if (localStorage.key(0) != null) {
                var i = localStorage.length;
                var co1 = localStorage.key(i - 1);
                document.getElementById('key').setAttribute('placeholder', "Twoja niedawna odpowiedź: "+co1);
                var co2 = localStorage.getItem(co1);
                document.getElementById('value').setAttribute('placeholder', "Twoja niedawna odpowiedź: "+co2);
				
			} 

			if (sessionStorage.key(0) != null) {
				nowywezel();
			}
		}

		function save() {
			var co = document.getElementById('key').value;
			var czy = document.getElementById('value').value;
            localStorage.setItem(co, czy);
            key.value = "";
            value.value = "";
		}

        function save1() {
            var co = document.getElementById('login').value;
            var czy = document.getElementById('haslo').value;
            sessionStorage.setItem(co, czy);
            key.value = "";
            value.value = "";
        }

	
		
		function nowywezel() {
		const element = document.getElementById("div1");
		element.remove();
		const wezel = document.createElement("p");
		const tekst = document.createTextNode("Dziękuję za twoją opinię!");
		wezel.appendChild(tekst);
		document.getElementById("div").appendChild(wezel);
		}	
		window.addEventListener("load", pierwsza, false);
	</script>
	
	<script>
		$(document).ready(function () {
			$("#p").click(function () {
				$(this).hide();
			});
            $("#p1").click(function () {
                $(this).hide();
			});
            $("#p2").click(function () {
                $(this).hide();
			});
            $("#p3").click(function () {
                $(this).hide();
            });
		});
	</script>

	<script>
		$(function () {
			$("#radio").checkboxradio();
			$("#radio1").checkboxradio();
			$("#radio2").checkboxradio();
		});
	</script>

	<script>
		$(function () {
			$("#speed").selectmenu();
		});
	</script>

</head>

<body>

	<div class="pasek"></div>
	<main>

		<header>
			<h1 class="logo">Strona melomana</h1>
		</header>

		<nav class="pasekmenu">
			<div class="menu">
				<button class="menuprzycisk">Strona Główna</button>
				<div class="menu-content">
					<a href="index.html">Powróć na stronę główną</a>
				</div>
			</div>

			<div class="menu">
				<button class="menuprzycisk">Dawid Podsiadło</button>
				<div class="menu-content ">
					<a href="#dawid">Wprowadzenie</a>
					<a href="dawid.html#cos">Opis</a>
				</div>
			</div>

			<div class="menu">
				<button class="menuprzycisk">Linkin Park</button>
				<div class="menu-content ">
					<a href="#linkinpark1">Wprowadzenie</a>
					<a href="linkinpark.html#linkinpark1">Opis</a>
				</div>
			</div>

			<div class="menu">
				<button class="menuprzycisk">Myslovitz</button>
				<div class="menu-content ">
					<a href="#myslovitz">Wprowadzenie</a>
					<a href="myslovitz.html#myslovitz">Opis</a>
				</div>
			</div>
		</nav>
	</main>

	<article>
		<section>
			<div class="pierwsza" id="p" style="cursor: pointer;">
				Muzyka jest dla mnie jedną z najważniejszych rzeczy w życiu, można by rzec, że jest dla mnie "solą życia". Towarzyszy mi ona codziennie, podczas jazdy w pociągu, gotowania obiadu, spacerów, nauki, krótko ujmując, muzyka jest w moim życiu wszędzie. Z tego powodu postanowiłem, umiejscowić ją także, na stronie o tematyce "moje hobby".
				Na tej stronie, można znaleźć opisy moich trzech ulubionych wykonawców muzycznych, zapraszam do lektury!
			</div>
		</section>
		<div class="pasek"></div>
		<section>

			<div class="zdjecia">
				<a id="dawid"></a>
				<div class="artysta">
					<figure>
						<a href="dawid.html#cos"><img src="img/dawid.jpg" alt="Dawid Podsiadło"></a>
						<figcaption>Dawid Podsiadło</figcaption>
					</figure>
					<div id="p1" style="cursor: pointer">
						<h6>
							"Dawid Podsiadło - czyli człowiek fenomen.
							Wyprzedał PGE Narodowy w ciągu dwóch minut, od ilości uzyskanych przez niego nagród i wyróżnień można dostać niemałego bólu głowy.
						</h6>
					</div>
				</div>
				
			</div>

			<div class="niewidzialny"></div>
			<div class="pasek"></div>

			<div class="zdjecia">
				<a id="linkinpark1"></a>
				<div class="artysta">
					<figure>
						<a href="linkinpark.html#linkinpark1"><img src="img/linkinpark.jfif" alt="Linkin Park"></a>
						<figcaption>Linkin Park</figcaption>
					</figure>
					<div id="p2" style="cursor: pointer;">
						<h6>
							Linkin Park – nutka ameryki w tym zestawieniu, zespół który jeżeli chodzi o gatunek muzyczny, jest ciężki do zdefiniowania, pokusiłbym się o stwierdzenie, iż jest multi-gatunkowy.
							Ich twórczość opiewa w pop, rock, nu metal, metal, muzykę elektroniczną i wiele innych. Mój osobisty faworyt.
						</h6>
					</div>
				</div>
			</div>

			<div class="niewidzialny"></div>
			<div class="pasek"></div>

			<div class="zdjecia">
				<a id="myslovitz"></a>
				<div class="artysta">
					<figure>
						<a href="myslovitz.html#myslovitz"><img src="img/myslovitz.jpg" alt="Myslovitz"></a>
						<figcaption>Myslovitz</figcaption>
					</figure>
					<div id="p3" style="cursor: pointer;">
						<h6>
							Myslovitz - polski zespół wykonujący muzykę alternative rock.
							Ich muzyka głównie opiewa w melancholijno-refleksyjne klimaty, ale nie brak również energicznej i radosnej muzyki.
						</h6>
					</div>
				</div>
			</div>

		</section>

	</article>

	<div class="niewidzialny"></div>
	<div class="pasek"></div>
	<div class="niewidzialny"></div>

	<div class="formularz">

		<form method="post" action="upload" id="input" enctype="multipart/form-data">

			<!----<fieldset>

				<legend>Który artysta, z powyżej wymienionych przypadł ci najbardziej do gustu?</legend>


				<label>
					<select id="speed">

						<option selected>Rozwiń listę</option>
						<option>Dawid Podsiadło</option>
						<option>Linkin Park</option>
						<option>Myslovitz</option>

					</select>
				</label>


			</fieldset>

			<div class="niewidzialny"></div>

			<fieldset>

				<legend>Wybierz jedną, najlepszą (według ciebie) piosenkę spośród podanych:</legend>

				<div><label><input type="radio" name="ankieta" id="radio">Długość Dźwięku Samotności</label></div>
				<div><label><input type="radio" name="ankieta" id="radio1">In The End</label></div>
				<div><label><input type="radio" name="ankieta" id="radio2">Najnowszy Klip</label></div>

			</fieldset>

			<div class="niewidzialny"></div>

			<fieldset>

				<legend>Co byś poprawił w tejże stronie?</legend>

				<label><input type="text" placeholder="Tutaj wpisz!" id="key"></label>


			</fieldset>

			<fieldset>

				<legend>Czy tematyka strony ci odpowiada?</legend>

				<label><input type="text" placeholder="Tutaj wpisz!" id="value"></label>

			</fieldset>
			<div class="niewidzialny"></div>
			<div class="niewidzialny"></div>
			<div class="niewidzialny"></div>
			<div class="niewidzialny"></div>
			<div class="niewidzialny"></div>
			<div class="niewidzialny"></div> -->
	
			<div id="div1">
				<fieldset>

					<label for="tytul">Tytuł:</label>
					<input type="text" name="titlee" id="tytul" placeholder="tytuł">

					<label for="autor">Autor:</label>
					<input type="text" name="author" id ="autor" placeholder="autor">


				</fieldset>
			</div>

			<div class="niewidzialny"></div>

			<span style="color:red; font-size: 12px;">wymagane załączenie pliku ("jpg",lub "png") oraz wypełnienie pola znak wodny</span>

			<fieldset>
				
				<label for="file">Załącz zdjęcie:</label>
				<input type="file" name="file" accept="images/*" id="file" >

				<label for="znakwodny">Znak wodny:</label>
				<input type="text" name="watermark" id="znakwodny" placeholder="znak wodny">

                <?php

					if(isset($_SESSION['error']))
						echo $_SESSION['error'];
          
                ?>

			</fieldset>



			<div id="div" style="text-align: center;color: #000;"></div>
			<div class="niewidzialny"></div>
			<input type="submit" name="upload" id="wyslij" value="Wyślij">
			<input type="reset" value="Wyczyść">
			<div class="niewidzialny"></div>

            <div class="img" style="display: inline-block; width: 100%; text-align: center;">
            </div>
		</form>

       
        <?php
			if(!isset($_SESSION['login_attempt_succes'])) {
				echo	 '<form action="login_action" method="post">'.
				'<span style="color:aqua;">ZALOGUJ SIĘ NA SWOJE KONTO</span>'.
				'<fieldset>'.

				'<label for="file">Login:</label>'.
				'<input type="text" name="nickattempt" placeholder="login" />'.

				'<label for="znakwodny">Hasło:</label>'.
				'<input type="password" name="passwordattempt" placeholder="hasło" />';

				if(isset($_SESSION['login_attempt_failed']))
                    echo $_SESSION['login_attempt_failed'];

				echo	'</fieldset>'.
				'<input type="submit" name="loginform" value="Zaloguj" />'.
				'</form>';
			}
			else {
                echo $_SESSION['login_attempt_succes'];
				echo'<form action="logout_action" method="post">'.
					'</fieldset>'.
				'<input type="submit" name="logout" value="Wyloguj" />'.
				'</form>';
            }
        ?>

      
        <div class="niewidzialny"></div>
        <span style="color:aqua;">JEŚLI NIE MASZ KONTA TO </span>
        <form action="go_to_register" method="post">
            <input type="submit" name="gotoregister" value="ZAŁÓŻ KONTO" />
        </form>
        <div class="niewidzialny"></div>
        <span style="color:aqua;">GALERIA ZDJĘĆ</span>
        <form action="go_to_gallery" id="galeria" method="post">
            <input type="submit" name="gotogallery" value="GALERIA ZDJĘĆ" />
        </form>
		<form action="go_to_delete_images" method="post">
            <input type="submit" name="go_to_delete_images" value="USUŃ ZAPAMIĘTANE ZDJĘCIA" />
		</form>
		
	</div>
	
	
	
	<footer>
		<p>Copyright 2022, Student, Piotr Lachowicz, 193630, Informatyka, grupa numer 7</p>
		<p>Źródła: <a href="https://www.wikipedia.org" target="_blank">www.wikipedia.org</a> <a href="https://www.w3schools.com" target="_blank">www.w3schools.com</a></p>
		<i>"Omnia possibilia, sunt apund Deum."</i> <b>IHS</b> <br>
		<i>"Nolite iudicare, et non iudicabimini."</i> <b>IHS</b>

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

	unset($_SESSION['error']);
	unset($_SESSION['login_attempt_failed']);

?>