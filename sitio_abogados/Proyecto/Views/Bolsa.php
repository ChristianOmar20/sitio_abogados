<?php
	require("../Controller/funciones.class.project.php");
	$obj	=	new	Project;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php $obj->titulo();?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php $obj->crear_css("reset.css");?>" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php $obj->crear_css("style.css");?>" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php $obj->crear_css("grid.css"); ?>" type="text/css" media="screen">
		<!--
		[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
		<![endif]
		-->
	</head>

	<body id="page2">
		<div class="extra">
			<header>
				<div class="main">
				<div class="border-top">
				<div class="wrapper">
					<h1><a href="/">Firma de abogados</a></h1>
					<nav>
						<ul class="menu">
						<li><a href="/">Inicio</a></li>
						<li><a class="active" href="<?php $obj->crear_vista("Bolsa.php");?>">Bolsa de Trabajo</a></li>
						<li class="last-item">
							<a href="<?php $obj->crear_vista("Contacto.php");?>">Contacto</a></li>
						</ul>
					</nav>
				</div>
				</div><!--final de div border-top-->
			
				<div class="slider-bg">
				<div class="slider">
				<div class="banner">
					<strong class="title-1">REALIZE</strong>
					<span class="text-1">your constitutional right for qualified</span>
					<a class="link" href="#">legal help</a>
				</div>
				</div>
				</div>
				</div><!--fin de div main-->
			</header>

			<section id="content"><div class="ic"></div>
				<div class="main">
				<div class="container_12">
					<div class="wrapper">
						<article class="grid_4">
							<div class="indent2">
								<h4>Our Services</h4>
								<div class="wrapper border-bot prev-indent-bot2">
									<figure class="img-indent2"><img src="/Web/images/page2-img1.png" alt=""></figure>
									<div class="extra-wrap">
										<h6 class="reg">vero accusamus</h6>
										Nam libero tempore cumsuta <a class="link" href="#">[...]</a>
									</div>
								</div>
								<div class="wrapper border-bot prev-indent-bot2">
									<figure class="img-indent2"><img src="/Web/images/page2-img2.png" alt=""></figure>
									<div class="extra-wrap">
										<h6 class="reg">Nobis est eligendi</h6>
										Optio cumque nihil impedit <a class="link" href="#">[...]</a>
									</div>
								</div>
								<div class="wrapper border-bot prev-indent-bot2">
									<figure class="img-indent2"><img src="/Web/images/page2-img3.png" alt=""></figure>
									<div class="extra-wrap">
										<h6 class="reg">Quminusid quodi</h6>
										Maxime placeat posimus <a class="link" href="#">[...]</a>
									</div>
								</div>
								<div class="wrapper border-bot prev-indent-bot2">
									<figure class="img-indent2"><img src="/Web/images/page2-img4.png" alt=""></figure>
									<div class="extra-wrap">
										<h6 class="reg">omnis voluptas</h6>
										Assumenda est omnis dolor  <a class="link" href="#">[...]</a>
									</div>
								</div>
								<div class="wrapper">
									<figure class="img-indent2"><img src="/Web/images/page2-img5.png" alt=""></figure>
									<div class="extra-wrap">
										<h6 class="reg">Temporibus autem </h6>
										Quibusdam officiis debitis <a class="link" href="#">[...]</a>
									</div>
								</div>
							</div>
						</article>
						<article class="grid_8">
							<div class="indent-left">
								<h3>About Our Services</h3>
								<h6>At vero eos et accusamus</h6>
								<p class="indent-bot">Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.
								</p>
								<h6>Dolorum fugat harum quidem </h6>
								<p class="img-indent-bot">Rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. 
								</p>
								<h6>Temporibus autem </h6>
								Quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.
							</div>
						</article>
					</div>
				</div>
			</div>
			<div class="block"></div>
		</section>
	</div>

		<footer>
			<div class="main">
				<div class="footer-bg">
				<div class="aligncenter">
					<?php $obj->footer();?>
				</div>
				</div>
			</div>
		</footer>
	</body>
</html>