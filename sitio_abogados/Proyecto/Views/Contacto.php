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
	
	<body id="page3">
		<div class="extra">
			<header>
				<div class="main">
				<div class="border-top">
				<div class="wrapper">
					<h1><a href="/">Firma de abogados</a></h1>
					<nav>
						<ul class="menu">
						<li><a href="/">Inicio</a></li>
						<li><a href="<?php $obj->crear_vista("Bolsa.php");?>">Bolsa de Trabajo</a></li>
						<li class="last-item">
							<a class="active"  href="<?php $obj->crear_vista("Contacto.php");?>">Contacto</a></li>
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
						<article class="grid_8">
							<div class="indent-left">
								<h3 class="p0">Formulario de Contacto</h3>
								<form id="contact-form" method="post" enctype="multipart/form-data">
									<fieldset>
										  <label><span class="text-form">Su nombre:</span><input type="text"></label>
										  <label><span class="text-form">Su correo:</span><input type="text"></label>
										  <div class="wrapper">
											<div class="text-form">Su mensaje:</div>
											<div class="extra-wrap">
												<textarea></textarea>
												<div class="clear"></div>
												<div class="buttons">
													<a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Limpiar</a>
													<a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Enviar</a>
												</div>
											</div>
										  </div>
									</fieldset>
									</form>
								</div>
							</article>
							<article class="grid_4">
								<div class="indent-left indent-top">
									<h4 class="img-indent-bot">Cont&aacute;ctenos</h4>
									<div class="wrapper indent-bot">
										<figure class="img-border">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746.297631312587!2d-98.7424806850754!3d20.121626986496718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d109fcbc4ee767%3A0xf3a1107036717f12!2sBuffet+de+Abogados+Pi%C3%B1a+%26+Asociados!5e0!3m2!1ses-419!2smx!4v1484006285201" width="400" height="300" frameborder="0" style="border:0" allowfullscreen>
										</iframe>
										</figure>
									</div>
									<dl>
										<dt class="prev-indent-bot2">USA 8901 Marmora Road, Glasgow</dt>
										<dd><span>Freephone:</span>  +1 800 559 6580</dd>
										<dd><span>Telephone:</span>  +1 800 603 6035</dd>
										<dd><span>Fax:</span>  +1 800 889 9898</dd>
										<dd><span>Email:</span><a href="#">mail@demolink.org</a></dd>
									</dl>
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