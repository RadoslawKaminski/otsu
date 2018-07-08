<!doctype html>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Potrzebujesz strony dla swojej firmy? Możemy ci w tym pomóc! Otsu to profesjonalne tworzenie stron internetowych." />
		<meta name="keywords" content="otsu, webmaster, strona, tworzenie, design, webdesign" />
		<link rel="manifest" href="site.webmanifest">
		<title>Otsu Webdesign - Tworzenie stron i wizytówek internetowych</title>
		<link rel="canonical" href="https://otsu.pl/zamow"/>
		<link rel="apple-touch-icon" href="icon.png">
        <link rel="stylesheet" href="css/main.css" type="text/css">
		<link rel="stylesheet" href="css/style.css"  type="text/css"/>
		<link rel="stylesheet" href="css/nav.css"  type="text/css"/>
		<link rel="stylesheet" href="css/order.css"  type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Roboto&amp;subset=latin-ext" type="text/css">
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
	
		<!-- Nawigacja -->
		<nav>
			<div id="nav">
				<a href='/'><div id="logo"></div></a>
				<div id="outerburger">
					<div id="hamburger" class="menu icon"></div>
				</div>
				<div id="menu">
					<ul>
						<li><a href='/'>Główna</a></li>
						<li><a href='o-nas'>O nas</a></li>
						<li><a href='cennik'>Cennik</a></li>
						<li><a href='kontakt'>Kontakt</a></li>
						<li><a href='FAQ'>FAQ</a></li>
					</ul>
				</div>
				<noscript>
					<div id="nojs-menu">
						<ul>
							<li><a href='/'>Główna</a></li>
							<li><a href='o-nas'>O nas</a></li>
							<li><a href='cennik'>Cennik</a></li>
							<li><a href='kontakt'>Kontakt</a></li>
							<li><a href='FAQ'>FAQ</a></li>
						</ul>
					</div>
				</noscript>
			</div>
		</nav>
		<!-- Content -->
		<div id='formcontainer'>
			<h1>ZŁóż zamównienie (formularz w trakcie prac)</h1>
			<form method="post" action="dziekujemy">
				<div id='upper'>
					<div id="part1">
						<h3>Typ usługi, jaka Cię interesuje:</h3>
						<select name="service">
							<option value="vcard">Wizytówka internetowa</option>
							<option value="wwwpage">Strona internetowa</option>
							<option value="onlinestore">Sklep internetowy</option>
							<option value="rebuild">Przebudowa witryny</option>
							<option value="rebuildour">Przebudowa witryny naszego autorstwa</option>
						</select>
						<h3>Podaj dane do kontaktu, użyjemy ich tylko do skontaktowania się z Tobą:</h3>
						<input type='text' name="firstname" placeholder="Twoje imię">
						<input type='text' name="lastname" placeholder="Twoje nazwisko">
						<input type='email' name="email" placeholder="adres@email.com">
						<input type='tel' maxlength='9' name="telnum" placeholder="Numer telefonu">
					</div>
					<div id="part2">
						<h3>Opisz krótko potrzebną Ci usługę, przekaż dodatkowe informacje:</h3>
						<textarea placeholder="Krótki opis tego, czego potrzebujesz :)"></textarea>
						<h3 id="prefhdr">Preferowany sposób kontaktu:</h3>
						<div id='radiochoice'>
							<input type="radio" id="email-contact" name="contact" value="email" checked>
							<label for="email-contact">E-mailowy</label>
							</br>
							<input type="radio" id="phone-contact" name="contact" value="phone">
							<label for="phone-contact">Telefoniczny</label>
						</div>
						<div id='policy'>
							<input type='checkbox' id='policy-checkbox'>
							<label for="policy-checkbox">Akceptuję <a href='polityka-prywatnosci'>politykę prywatności</a></label>
						</div>
					</div>
				</div>
				<div id='captcha'>
					<div class="g-recaptcha" data-sitekey="6LcfKWEUAAAAAGML5zsdvLXCyk-_INvqHXQFoAlH"></div>
				</div>
				<input type='submit' value='Złóż zamówienie'>
			</form>
		</div>

		<footer>
			<div id="footer">Otsu&trade; Webdesign Maciej Witkowski i Radosław Kamiński - Wszelkie prawa zastrzeżone &copy;</div>
		</footer>
		<!-- Skrypty -->
		<script src="js/nav.js"></script>
        <script src="js/plugins.js"></script>
        <script>
		
			window.onload = function()
			{
				activeNav();
			}
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
		<script src="https://www.google-analytics.com/analytics.js" async defer></script>
	</body>
</html>