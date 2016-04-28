<!doctype html>
<html lang="fr">
	<head>
		<title>HeartFeel - Contact</title>
		<link rel="stylesheet" href="style.css" />
		<meta charset="utf-8" />
	</head>
	<body>
		<table id="top">
			<td class="column">
				<a href="index.html">
					home
				</a>
			</td>
			<td class="column">
				<a href="about.html">
					about
				</a>
			</td>
			<td class="column">
				<a href="team.html">
					team
				</a>
			</td>
			<td class="column">
				<a href="contact.html">
					contact
				</a>
			</td>
		</table>
		
		<div id="main">
			<div id="title">
				<a href="index.html"><img src="imagesWeb/Small/Logo.gif" alt="Logo Heartfeel"/></a>
			</div>
			<div id="subtitle"><h4>Always feel it!</h4></div>

			<!--Partie centrale-->
			<div id="sectionTitle"><u>Contact</u></div>

			<form action="contact.php">
				Name:<br> <input type="text" name="Name" value="Name"><br>
				Address:<br><input type="email" name="Address" value="Your mail address"><br>
				Message:<br><textarea type="text" name="Message" value="Your message..." height="35"></textarea>
				<input type="submit" value="Send e-mail">
			</form>
			<?php
			mail ('childofchaos@live.fr', 'salut flav', 'message de test')
			?>
		</div>




		<footer id="footer">
			<div>
				<a class="imgFooter" href="http://www.appstore.com" target="_blank">
					<img class="imgFooter" src="imagesWeb/AppStore.png" alt="Image AppStore"/>
				</a>
				<a class="imgFooter" href="https://play.google.com/store?hl=fr" target="_blank">
					<img class="imgFooter" src="imagesWeb/GooglePlay.png" alt="Image GooglePlay"/>
				</a>
			</div>

   			 <p>© Copyright RedPulse - 2016</p>
		</footer>
	</body>
</html>