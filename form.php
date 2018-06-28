<!doctype html>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Potrzebujesz strony dla swojej firmy? Możemy ci w tym pomóc! Otsu to profesjonalne tworzenie stron internetowych." />
		<meta name="keywords" content="otsu, webmaster, strona, tworzenie, design, webdesign" />
		<link rel="manifest" href="site.webmanifest">
		<title>Otsu Webdesign</title>
		<link rel="apple-touch-icon" href="icon.png">
        <link rel="stylesheet" href="css/main.css" type="text/css">
		<link rel="stylesheet" href="css/style.css"  type="text/css"/>
		<link rel="stylesheet" href="css/nav.css"  type="text/css"/>
		<link rel="stylesheet" href="css/aos.css"  type="text/css"/>
		<link rel="stylesheet "href="https://fonts.googleapis.com/css?family=Lato|Roboto" type="text/css">
	</head>
	<body>
	
		<!-- Nawigacja -->
		<noscript>
			<div style="width:100%; position:fixed; top:0; color:red; z-index: 13;">
				Twoja przeglądarka ma wyłączony Javascript! Strona nie będzie wyświetlana w pełni poprawnie.
			</div>
		</noscript>
		<nav>
			<div id="nav" class="nav-transparent">
				<a href='index.html'><div id="logo"></div></a>
				<div id="outerburger">
					<i id="hamburger" class="icon-hamburger"></i>
				</div>
				<div id="menu">
					<ul>
						<li><a class="current" href='index.html'>Główna</a></li>
						<li><a href='about.html'>O nas</a></li>
						<li><a href='projects.html'>Nasze projekty</a></li>
						<li><a href='prices.html'>Cennik</a></li>
						<li><a href='contact.html'>Kontakt</a></li>
					</ul>
				</div>
				<noscript>
					<div id="nojs-menu">
						<ul>
							<li><a class="current" href='index.html'>Główna</a></li>
							<li><a href='about.html'>O nas</a></li>
							<li><a href='projects.html'>Nasze projekty</a></li>
							<li><a href='prices.html'>Cennik</a></li>
							<li><a href='contact.html'>Kontakt</a></li>
						</ul>
					</div>
				</noscript>
			</div>
		</nav>

        <!-- Content -->
        <div style='margin-top: 100px; text-align: center;'>
        <h1>Dziękujemy za wypełnienie formularza!</h1>
        <a href='order.html'><h2>Placeholderowy przycisk powrotu do formularza</h2></a>

        <?php
            $email = $_POST['email'];
            echo "Test php. E-mail podany w formularzu to $email";
        ?>

        </div>
		<footer>
			<div id="footer">Otsu&trade; Webdesign Maciej Witkowski i Radosław Kamiński - Wszelkie prawa zastrzeżone &copy;</div>
		</footer>
		<!-- Skrypty -->
		<script src="js/navcolor.js"></script>
        <script src="js/plugins.js"></script>
		<script src="js/hamburger.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/indeximgload.js"></script>
		<script src="js/scroll.js"></script>
		<script src="js/aos.js"></script>
        <script>
		
			window.onload = function()
			{
				initScroll();
				activeNav();
			}
			window.onscroll = function()
			{
				navcolor();
			}
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
		<script src="https://www.google-analytics.com/analytics.js" async defer></script>
	</body>
</html>