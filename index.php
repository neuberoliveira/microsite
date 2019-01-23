<?php 
$mainUrl = 'https://www.primeiramesa.com.br';
$siteName = 'Primeira Mesa';
$slogan = 'Uma experiêcia de Primeira';

$androidUrl = 'https://play.google.com/store/apps/details?id=com.primeiramesa2';
$iosUrl = 'https://itunes.apple.com/br/app/primeira-mesa/id1261413562';
?>
<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="images/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
	<link href="images/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
	<link href="images/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
	<link href="css/jcarousel.responsive.css" type="text/css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css">
	<link href='http://fonts.googleapis.com/css?family=Share:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="css/default.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/aplicativos.css" type="text/css" rel="stylesheet" media="screen">
	<link href="css/aplicativos/pm.css" type="text/css" rel="stylesheet" media="screen">

	<title>
		<?php echo $siteName ?> |
		<?php echo $slogan ?>
	</title>

	<meta property="og:type" content="company">
	<meta property="og:site_name" content="<?php echo $siteName ?>">
	<meta property="og:url" content="<?php echo $mainUrl ?>">
	<meta property="og:title" content="<?php echo $siteName ?> | <?php echo $slogan ?>">
	<meta property="og:description" content="Que tal chegar nos restaurantes antes de todo mundo, ter um atendimento exclusivo e ainda pagar 50% menos nos pratos? É só baixar o app do Primeira Mesa. Com ele você não apenas garante reservas com desconto no primeiro horário dos restaurantes.">
	<meta property="og:image" content="<?php echo $mainUrl ?>/images/icon.png">

	<meta name="description" content="Que tal chegar nos restaurantes antes de todo mundo, ter um atendimento exclusivo e ainda pagar 50% menos nos pratos? É só baixar o app do Primeira Mesa. Com ele você não apenas garante reservas com desconto no primeiro horário dos restaurantes">
	<meta name="author" content="<?php echo $siteName ?> | <?php echo $mainUrl ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


	<div id="wrap">

		<!-- Carousel Companies
    ================================================== -->
		<div class="row" id="palavras">
			<div class="container">
				<div class="col-xs-12 col-md-8">
					<img src="images/aplicativos/pm/logo.png" class="img-rounded pull-left margin-right margin-bottom" width="180">
					<h1>Primeira<br>Mesa</h1>
					<div class="clearfix"></div>
					<p>Que tal chegar nos restaurantes antes de todo mundo, ter um atendimento exclusivo e ainda pagar 50% menos nos pratos? É só baixar o app do Primeira Mesa. Com ele você não apenas garante reservas com desconto no primeiro horário dos restaurantes, como também busca os estabelecimentos cadastrados mais perto, avalia atendimentos, acompanha seu histórico de reservas, recebe notificações e muito mais.
					<ul class="lojas list-unstyled">
						<li class="play">
							<a href="<?php echo $androidUrl ?>" target="_blank">
								Play Store
							</a>
						</li>
						<li class="app">
							<a href="<?php echo $iosUrl ?>" target="_blank">
								App Store
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="telefone">
						<img src="images/aplicativos/pm/tela1.png" class="tela">
					</div>
				</div>
			</div><!-- /.container -->
		</div><!-- /.row -->



		<footer id="footer">
			<div class="container">
				<div class="col-xs-12 col-sm-6"> Copyright &copy;
					<?php echo date('Y') ?>
					<?php echo $siteName ?>. Todos os direitos reservados. </div>
				<div class="col-xs-12 col-sm-6 text-right">
					<div class="pull-right">
						<fb:like width="200px" layout="button_count" action="like" show_faces="false" share="true"></fb:like>
					</div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="primeiramesa" data-lang="pt">Tweetar</a>
					<script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
		</footer>
	</div>
	<!-- /.wrap -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</body>

</html>