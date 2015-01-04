<html>
<head>
	<meta charset="utf-8" />
	<!--CSS-->
	<link href="assest/css/bootstrap.min.css" rel="stylesheet">
	<link href="assest/css/consolidados.css" rel="stylesheet">

	<!--JS-->
	<script src="assest/js/jquery-2.1.3.js"></script>
	<script src="assest/js/bootstrap.min.js"></script>

	<title><?= $titulo ?></title>
</head>
<body>
<div id="wrapper">
	<div id="header" style="margin-top: 20px; margin-left: 30px;">
		<div class="row" id="header-large">
			<div class="col-xs-4">	<!--LOGO-->
				<a href="#"><id="logo" img src="assest/img/logo.png" style="width:100%"></a>
			</div>
			<div class="col-xs-8">
				<ul id="menuRedesSociales">
					<li><a href="#"><img src="assest/img/icon/mercadolibre.png"></a></li>
					<li><a href="#"><img src="assest/img/icon/facebook.png"></a></li>
					<li><a href="#"><img src="assest/img/icon/twitter.png"></a></li>
					<li><a href="#"><img src="assest/img/icon/instagram.png"></a></li>
					<li><a href="#"><img src="assest/img/icon/youtube.png"></a></li>
					<li><a href="#"><img src="assest/img/icon/bbm.png"></a></li>
				</ul>
				<div>
				<!--<ul id="menuRedesSociales">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Inicio</a></li>-->
				</ul>
			</div>
			</div>
		</div>
		<div class"row" id="header-short">
			<div class="col-xs-12">	<!--LOGO-->
				<a href="#"><img src="assest/img/logo.png" style="width:100%"></a>
			</div>
		</div>
	</div>
	<div id="main">
		<div id="content">
			<h2><?= $titulo ?></h2>
			<div class="post">
				<?= $cuerpo ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<?= $pie ?>
	</div>
</div>
</body>
</html>
