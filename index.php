<!DOCTYPE html>
<html>
<head>
<title>Remember the Ginger</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/cards.css" />
<link href='http://fonts.googleapis.com/css?family=Arapey' rel='stylesheet' type='text/css' />
</head>
<body>
	<div class="wrapper clearfix">
		<h1 class="center">Remember the Ginger</h1>
		<p class="desc">A simple matching game. Click a card to reveal it's face value. Click two cards in a row with
		the same face value to leave them 'face up'. Object is to make match all of the cards with as few clicks and
		as little time as possible.</p>
		<input type="button" class="button" value="Start" />
		<div class="cardframe clearfix"></div>
		<div class="deck"></div>
		<div class="score">
			<span class="clicks"></span>
			<span class="matches"></span>
			<span class="time"></span>
			<span class="stats"></span>
		</div><!-- .score -->
		<hr />
		<h2 class="center">About</h2>
		<p class="desc">This is a second, more expiremental implentation of the same game. See the <a href="/myprojects/cards/">first version</a>. This version has
		animated flips, no images (CSS3 Gradients), and doesn't use class names to match the cards. Instead, if uses an actual JavaScript like the first one <strong>should</strong>
		have to make casual cheating by matching classes impossible.</p>
		<p class="center"><br />Created by<br /><a class="credit" href="http://bradleystap.es" title="The Ginger Boy">Bradley Staples</a></p>
	</div><!-- .wrapper -->
	<div class="overlay"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/cards.js"></script>
</body>
</html>