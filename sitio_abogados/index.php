<?php
	require("/Proyecto/Controller/funciones.class.project.php");
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
	
	<body id="page1">
		<div class="extra">
			<header>
				<div class="main">
				<div class="border-top">
				<div class="wrapper">
					<h1><a href="/">Firma de abogados</a></h1>
					<nav>
						<ul class="menu">
						<li><a class="active" href="/">Inicio</a></li>
						<li><a href="<?php $obj->crear_vista("Bolsa.php");?>">Bolsa de Trabajo</a></li>
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

			<section id="content">
				<div class="ic"></div>
				<div class="main">
					<div class="container_12">
					<div class="wrapper p3">
						<article class="grid_8">
							<div class="indent-left">
								<h3>Welcome!</h3>
								<h4 class="color-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</h4>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fugat harum quidem rerum facilis est et expedita.
							</div>
						</article>
						<article class="grid_4">
							<div class="indent-left indent-top">
								<h4 class="prev-indent-bot2">Success Stories</h4>
								<ul class="list-1">
									<li><a href="#">At vero eos et accusamus et iusto</a></li>
									<li><a href="#">Odio dignissimos ducimus</a></li>
									<li><a href="#">Blanditiis praesentium voluptatum</a></li>
									<li><a href="#">Deleniti atque corrupti quos</a></li>
									<li><a href="#">Rolores et quas molestias excepturi</a></li> 
								</ul>
							</div>
						</article>
					</div>
					<aside>
						<div class="wrapper">
							<article class="grid_4">
								<div class="indent">
									<span class="title-2">Capital <strong>Market</strong></span>
									<div class="prev-indent-bot2 wrapper">
										<figure class="img-border"><img src="/Web/images/page1-img1.jpg" alt=""></figure>
									</div>
									<p class="p2">Jason Smith is one of <a class="link" href="">free website tem plates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.
                                    </p>
									<a class="link-1" href="#">Read More</a>
								</div>
							</article>
							<article class="grid_4">
								<div class="indent">
									<span class="title-2">Banking &amp; <strong>Finance</strong></span>
									<div class="prev-indent-bot2 wrapper">
										<figure class="img-border"><img src="/Web/images/page1-img2.jpg" alt=""></figure>
									</div>
									<p class="p2">This <a class="link" href="">Jason Smith Template</a> goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com. 
                                    </p>
									<a class="link-1" href="#">Read More</a>
								</div>
							</article> 
							<article class="grid_4">
								<div class="indent">
									<span class="title-2">Employment <strong>Law</strong></span>
									<div class="prev-indent-bot2 wrapper">
										<figure class="img-border"><img src="/Web/images/page1-img3.jpg" alt=""></figure>
									</div>
									<p class="p2">This website template has several pages: <a class="link color-1" href="/Complementos/pagina1">About Us</a>, <a class="link color-1" href="services.html">Services</a>, <a class="link color-1" href="contacts.html">Contact Us</a> (note that contact us form – doesn't work).
                                    </p>
										<a class="link-1" href="#">Read More</a>
									</div>
							</article>
						</div>
					</aside>
				</div><!--fin de div container_12-->
			</div><!--fin de div main-->
			<div class="block"></div>
		</section>
		</div><!--fin de div extra-->
	
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