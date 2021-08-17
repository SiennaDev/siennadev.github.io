<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sienna - Bitcoin Checkout</title>
		<link rel="stylesheet" href="../style/style.css">
		<link rel="icon" type="image/png" href="../img/logo.ico"/>
		<link rel = "schema.DC" href = "http://purl.org/DC/elements/1.0/">
		<meta name = "DC.Title" content = "Sienna">
		<meta name = "DC.Creator" content = "Hadrien PARIS">
		<meta name = "DC.Type" content = "blog">
		<meta name = "DC.Date" content = "2021">
		<meta name = "DC.Format" content = "text/html">
		<meta name = "DC.Language" content = "en">
		<style>
			@font-face
			{
				font-family: 'Quicksand';
				src: url('../fonts/Quicksand_Light.otf');
			}
		</style>
	</head>
	<body>
		<div id="haut">
			<h1 id="title">SIENNA</h1>
			<p class="page">
				<a href="recovery.html">DATA RECOVERY</a>
			</p>
			<p class="page">
				/
			</p>
			<p class="page">
				<a href="pricings.html">DATA STORAGE SOLUTIONS</a>
			</p>
			<p class="page">
				/
			</p>
			<p class="page">
				<a href="about.html">ABOUT</a>
			</p>
			<p class="page">
				/
			</p>
			<p class="page">
				<a href="../admin/index.html">LOGIN</a>
			</p>
		</div>
		<div id="explications">
			<section class="about">
				<h2 class="explanation_title">BITCOIN CHECKOUT</h2>
				action="https://www.bitcoinqrcodemaker.com/api/style=bitcoin&fiat=EUR&amount=15&address=bc1qfvv3xz4jxsyr9f53qk9xs5uvmr4j72phyt5s2p"
				<form method="post" action="btc_checkout.php">
					<div>
						<p>
							<input type="submit" value="Send">
						</p>
					</div>
				</form>
			</section>
		</div>
		<?php$to = "Hadrien.paris@icloud.com";$subject = "My subject";$txt = "Hello world!";mail($to,$subject,$txt);?>
		<footer class="footer">
			<ul>
				<li><a href="../index.html">Home</a></li>
			</ul>
			<ul>
				<li><a href="https://harfang.net">Harfang</a></li>
			</ul>
			<ul>
				<li><a href="https://github.com/HadPhazz">Github</a></li>
			</ul>
			<ul>
				<li><a href="mailto:Hadrien.paris@icloud.com">Contact</a></li>
			</ul>
		</footer>
	</body>
</html>
