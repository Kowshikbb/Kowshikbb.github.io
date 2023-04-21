<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="showreel">
			<h1>Showreel</h1>
			<video controls>
				<source src="showreel.mp4" type="video/mp4">
			</video>
		</section>
		<section id="portfolio">
			<h1>Portfolio</h1>
			<div class="gallery">
				<img src="image1.jpg">
				<img src="image2.jpg">
				<img src="image3.jpg">
				<img src="image4.jpg">
			</div>
		</section>
		<section id="about">
			<h1>About</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, elit non tempus maximus, nisl arcu aliquet nunc, sit amet tincidunt purus nisi sed dolor. Sed posuere tincidunt arcu vel bibendum. Aenean malesuada, tortor vel fringilla iaculis, neque erat malesuada eros, non consectetur lacus purus vel urna.</p>
		</section>
		<section id="contact">
			<h1>Contact</h1>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email">
				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea>
				<input type="submit" value="Send">
			</form>
		</section>
	</main>
	<footer>
		<p>Copyright © My Portfolio</p>
	</footer>
</body>
</html>
