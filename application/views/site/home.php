<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<meta charset="utf-8"/>
	<meta name="keywords" content="Coreangol, angola, luanda, empresa, Exploraçâo, Inertes, granitos, pavimentos, Engenharia, Construçâo, lda, brita, tout venant, pó, rachâo, extraçâo, rochas, ornamentais, granito, Quartzo">
	<meta name="description" content="A Coreangol, Engenharia e Construçâo, Lda., foi constituída à 14 de Setembro de 2005, como empresa de Direito Angolano sendo o objecto principal dentre outras actividades, a Construçâo Civil, Consultoria e Exploraçâo de Inertes, nomeadamente, brita, tout venant, pó, rachâo, extraçâo de rochas ornamentais de granito e Quartzo.">
	<meta name="author" content="Coreangol">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png" type="image/x-icon"/>
	<link rel="apple-touch-icon" href="<?= base_url('assets/') ?>images/icon.png">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>custom-font/fonts.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootsnav.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/jquery.fancybox.css?v=2.1.5"
		  media="screen"/>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/custom.css"/>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<div id="loading">
	<div id="loading-center">
		<div id="loading-center-absolute">
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
			<div class="object"></div>
		</div>
	</div>
</div>
<header>
	<div class="top_nav">
		<div class="container">
			<ul class="list-inline info">
				<li><a href="#"><span class="fa fa-phone"></span> <?= $contactos['telefone'] ?></a></li>
				<li><a href="#"><span class="fa fa-envelope"></span> <?= $contactos['email'] ?></a></li>
				<li><a href="#"><span class="fa fa-clock-o"></span> <?= $contactos['horario'] ?></a></li>
			</ul>
			<ul class="list-inline social_icon">
				<li><a href="<?= $social['facebook'] ?>" target="_blank"><span class="fa fa-facebook"></span></a></li>
				<li><a href="<?= $social['twitter'] ?>" target="_blank"><span class="fa fa-twitter"></span></a></li>
				<li><a href="<?= $social['behance'] ?>" target="_blank"><span class="fa fa-behance"></span></a></li>
				<li><a href="<?= $social['dribbble'] ?>" target="_blank"><span class="fa fa-dribbble"></span></a></li>
				<li><a href="<?= $social['linkedin'] ?>" target="_blank"><span class="fa fa-linkedin"></span></a></li>
				<li><a href="<?= $social['youtube'] ?>" target="_blank"><span class="fa fa-youtube"></span></a></li>
			</ul>
		</div>
	</div><!-- Top Navbar end -->
	<nav class="navbar bootsnav">
		<div class="top-search">
			<div class="container">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-search"></i></span>
					<input type="text" class="form-control" placeholder="Search">
					<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="attr-nav">
				<ul>
					<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
				</ul>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="">
					<img class="logo" src="<?= base_url('assets/') ?>images/logo1.png" alt="">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-menu">
				<ul class="nav navbar-nav menu">
					<li><a href="<?=base_url()?>"><?= lang('home') ?></a></li>
					<li><a href="#about"><?= lang('sobre') ?></a></li>
					<li><a href="#services"><?= lang('servico') ?></a></li>
					<li><a href="#portfolio"><?= lang('portfolio') ?></a></li>
					<li><a href="#contact_form"><?= lang('contacto') ?></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<section id="home" class="home">
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?= base_url('assets/images/5.2.png') ?>" alt="">
			</div>
			<div class="item">
				<img src="<?= base_url('assets/images/6.1.jpg') ?>" alt="">
			</div>
			<div class="item">
				<img src="<?= base_url('assets/images/8.2.png') ?>" alt="">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<section id="about">
	<div class="container about_bg">
		<div class="row">
			<div class="col-lg-7 col-md-6">
				<div class="about_content">
					<h2><?= lang('sobre_title') ?></h2>
					<h3><?= lang('info_sobre') ?></h3>
					<?= lang('sobre_desc') ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-lg-offset-1">
				<div class="row">
					<a class="fancybox" href="<?= base_url('assets/images/10.3.jpg') ?>"
					   data-fancybox-group="gallery">
						<img src="<?= base_url('assets/') ?>images/10.3.jpg" alt=""/>
					</a>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<a class="fancybox" href="<?= base_url('assets/images/10.4.jpg') ?>"
						   data-fancybox-group="gallery">
							<img src="<?= base_url('assets/images/10.4.jpg') ?>" alt=""/>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="fancybox" href="<?= base_url('assets/images/10.5.jpg') ?>"
						   data-fancybox-group="gallery">
							<img src="<?= base_url('assets/') ?>images/10.5.jpg" alt=""/>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="fancybox" href="<?= base_url('assets/images/10.6.jpg') ?>"
						   data-fancybox-group="gallery">
							<img src="<?= base_url('assets/images/10.6.jpg') ?>" alt=""/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="why_us">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="head_title">
					<h2><?= lang('detalhes_Servico') ?></h2>
					<?= lang('detalhes_Servico_2') ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="why_us_item">
					<?= lang('detalhes_Servico_info_1') ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="why_us_item">
					<?= lang('detalhes_Servico_info_2') ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="why_us_item">
					<?= lang('detalhes_Servico_info_3') ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="why_us_item">
					<?= lang('detalhes_Servico_info_4') ?>
				</div>
			</div>
		</div>
	</div>
</section><!-- Why us end -->
<section id="services">
	<div class="container">
		<h2><?= lang('servico') ?></h2>
		<div class="row">
			<div class="col-md-4">
				<div class="service_item">
					<img src="<?= base_url('assets/images/5.2.png') ?>" alt="<?= lang('servico') ?>"/>
					<h3><?= lang('servico_1') ?></h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
						ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_item">
					<img src="<?= base_url('assets/images/11.4.png') ?>" alt="<?= lang('servico') ?>"/>
					<h3><?= lang('servico_2') ?></h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
						ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_item">
					<img src="<?= base_url('assets/images/5.3.png') ?>" alt="<?= lang('servico') ?>"/>
					<h3><?= lang('servico_3') ?></h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
						ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
				</div>
			</div>
		</div>
	</div>
</section><!-- Services end -->
<section id="portfolio">
	<div class="container portfolio_area text-center">
		<h2><?= lang('portfolio') ?></h2>
		<!--
		<div id="filters">
			<button class="button is-checked" data-filter="*">Mostre tudo</button>
			<button class="button" data-filter=".buildings">Edifícios</button>
			<button class="button" data-filter=".interior">Interior Design</button>
			<button class="button" data-filter=".isolation">Isolation</button>
			<button class="button" data-filter=".plumbing">Plumbing</button>
		</div>
		-->
		<div class="grid">
			<div class="grid-sizer"></div>

			<div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
				<img alt="" src="<?= base_url('assets/') ?>images/1.1.png">
				<div class="portfolio_hover_area">
					<a class="fancybox" href="<?= base_url('assets/images/1.1.png') ?>"
					   data-fancybox-group="gallery">
						<span class="fa fa-search"></span></a>
				</div>
			</div>
			<?php foreach ($portfolios as $portfolio): ?>
				<div class="grid-item buildings plumbing interior">
					<img alt="" src="<?= $portfolio ?>">
					<div class="portfolio_hover_area">
						<a class="fancybox" href=" <?= $portfolio ?>?>"
						   data-fancybox-group="gallery">
							<span class="fa fa-search"></span></a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section id="testimonial">
	<div class="container text-center testimonial_area">
		<h2><?= lang('projectos') ?></h2>
		<?= lang('projectos_desc') ?>
		<div class="row">
			<div class="col-md-4">
				<div class="testimonial_item">
					<div class="testimonial_content text-left">
						<?= lang('projectos_info_1') ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimonial_item">
					<div class="testimonial_content">
						<?= lang('projectos_info_2') ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimonial_item">
					<div class="testimonial_content">
						<?= lang('projectos_info_3') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact_form">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Você tem alguma pergunta?</h2>
				<h2 class="second_heading">Sinta-se livre para nos contactar!</h2>
			</div>
			<form role="form" class="form-inline text-right col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" id="name" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="5" id="msg" placeholder="Message"></textarea>
				</div>
				<button type="submit" class="btn submit_btn">Submit</button>
			</form>
		</div>
	</div>
</section><!-- Contact form end -->
<footer>
	<div class="container footer_top">
		<div class="row">
			<div class="col-lg-4 col-sm-7">
				<div class="footer_item">
					<img class="logo" src="<?= base_url('assets/') ?>images/logo1.png" alt="<?=$title?>"/>
					<p><?= lang('info_footer') ?></p>

					<ul class="list-inline footer_social_icon">
						<li><a href=""><span class="fa fa-facebook"></span></a></li>
						<li><a href=""><span class="fa fa-twitter"></span></a></li>
						<li><a href=""><span class="fa fa-youtube"></span></a></li>
						<li><a href=""><span class="fa fa-google-plus"></span></a></li>
						<li><a href=""><span class="fa fa-linkedin"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-5">
				<div class="footer_item">
					<h4>Explorar link</h4>
					<ul class="list-unstyled footer_menu">
						<li><a href="#about"><span class="fa fa-play"></span><?= lang('sobre') ?></a>
						<li><a href="#services"><span class="fa fa-play"></span><?= lang('servico') ?></a>
						<li><a href="#portfolio"><span class="fa fa-play"></span><?= lang('portfolio') ?></a>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-7">
				<div class="footer_item">
				</div>
			</div>
			<div class="col-lg-3 col-sm-5">
				<div class="footer_item">
					<h4>Contate-nos</h4>
					<ul class="list-unstyled footer_contact">
						<li><a href=""><span class="fa fa-map-marker"></span> <?=$contactos['morada']?></a></li>
						<li><a href=""><span class="fa fa-envelope"></span> <?=$contactos['email']?></a></li>
						<li><a href=""><span class="fa fa-mobile"></span><?=$contactos['telefone']?></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- Footer top end -->
	<div class="footer_bottom text-center">
		<p class="wow fadeInRight">
			<?= $title ?> by
			<a target="_blank" href="https://www.cykrotec.com">Cykrotec</a>
			2020. All Rights Reserved
		</p>
	</div><!-- Footer bottom end -->
</footer><!-- Footer end -->
<script src="<?= base_url('assets/') ?>js/jquery-1.12.1.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootsnav.js"></script>
<script src="<?= base_url('assets/') ?>js/isotope.js"></script>
<script src="<?= base_url('assets/') ?>js/isotope-active.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.fancybox.js?v=2.1.5"></script>
<script src="<?= base_url('assets/') ?>js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>
</html>
