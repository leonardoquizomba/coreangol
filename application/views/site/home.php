<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
	<!-- Top Navbar -->
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
				<a class="navbar-brand" href=""><img class="logo" src="<?= base_url('assets/') ?>images/logo.png"
													 alt=""></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-menu">
				<ul class="nav navbar-nav menu">
					<li><a href=""><?= lang('home') ?></a></li>
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
	<!-- Carousel -->
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<!-- Carousel-inner -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?= base_url('assets/') ?>images/slider_img.jpg" alt="Construction">
				<div class="overlay">
					<div class="carousel-caption">
						<h3>Somos Engenheiros Certificados</h3>
						<h1>Serviços de construção</h1>
						<h1 class="second_heading">Criativo e Profissional</h1>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
							consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
							est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
						<a class="btn know_btn">saber mais</a>
						<a class="btn know_btn">ver projeto</a>
					</div>
				</div>
			</div>
			<div class="item ">
				<img src="<?= base_url('assets/') ?>images/slider_img2.jpg" alt="Construction">
				<div class="overlay">
					<div class="carousel-caption">
						<h3>Somos Engenheiros Certificados</h3>
						<h1>Serviços de construção</h1>
						<h1 class="second_heading">Criativo e Profissional</h1>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
							consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
							est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
						<a class="btn know_btn">saber mais</a>
						<a class="btn know_btn">ver projeto</a>
					</div>
				</div>
			</div>
			<div class="item ">
				<img src="<?= base_url('assets/') ?>images/slider_img3.jpg" alt="Construction">
				<div class="overlay">
					<div class="carousel-caption">
						<h3>Somos Engenheiros Certificados</h3>
						<h1>Serviços de construção</h1>
						<h1 class="second_heading">Criativo e Profissional</h1>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
							consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
							est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
						<a class="btn know_btn">saber mais</a>
						<a class="btn know_btn">ver projeto</a>
					</div>
				</div>
			</div>
		</div><!-- Carousel-inner end -->
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div><!-- Carousel end-->
</section>
<section id="about">
	<div class="container about_bg">
		<div class="row">
			<div class="col-lg-7 col-md-6">
				<div class="about_content">
					<h2><?= lang('sobre_title') ?></h2>
					<h3><?= lang('info_sobre') ?></h3>
					<?= lang('sobre_desc') ?>
					<a class="btn know_btn">saber mais</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-lg-offset-1">
				<div class="about_banner">
					<img src="<?= base_url('assets/') ?>images/man.png" alt=""/>
				</div>
			</div>
		</div>
	</div>
</section><!-- About end -->
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
		<h2>NOSSOS SERVIÇOS</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="service_item">
					<img src="<?= base_url('assets/') ?>images/service_img1.jpg" alt="Our Services"/>
					<h3>GESTÃO DA CONSTRUÇÃO</h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
						ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
					<a href="#services" class="btn know_btn">know more</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_item">
					<img src="<?= base_url('assets/') ?>images/service_img2.jpg" alt="Our Services"/>
					<h3>RENOVAÇÃO</h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
						ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
					<a href="#services" class="btn know_btn">know more</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_item">
					<img src="<?= base_url('assets/') ?>images/service_img3.jpg" alt="Our Services"/>
					<h3>ARQUITETURA</h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
						ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
					<a href="#services" class="btn know_btn">know more</a>
				</div>
			</div>
		</div>
	</div>
</section><!-- Services end -->
<section id="portfolio">
	<div class="container portfolio_area text-center">
		<h2>Feito com amor</h2>
		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
			dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit,</p>

		<div id="filters">
			<button class="button is-checked" data-filter="*">Mostre tudo</button>
			<button class="button" data-filter=".buildings">Edifícios</button>
			<button class="button" data-filter=".interior">Interior Design</button>
			<button class="button" data-filter=".isolation">Isolation</button>
			<button class="button" data-filter=".plumbing">Plumbing</button>
		</div>
		<!-- Portfolio grid -->
		<div class="grid">
			<div class="grid-sizer"></div>
			<div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
				<img alt="" src="<?= base_url('assets/') ?>images/highligh_img.jpg">
				<div class="portfolio_hover_area">
					<a class="fancybox" href="<?= base_url('assets/') ?>images/highligh_img.jpg"
					   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
								class="fa fa-search"></span></a>
					<a href="#"><span class="fa fa-link"></span></a>
				</div>
			</div>

			<div class="grid-item buildings interior isolation">
				<img alt="" src="<?= base_url('assets/') ?>images/portfolio1.jpg">
				<div class="portfolio_hover_area">
					<a class="fancybox" href="<?= base_url('assets/') ?>images/portfolio1.jpg"
					   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
								class="fa fa-search"></span></a>
					<a href="#"><span class="fa fa-link"></span></a>
				</div>
			</div>

			<div class="grid-item interior plumbing isolation">
				<img alt="" src="<?= base_url('assets/') ?>images/portfolio2.jpg">
				<div class="portfolio_hover_area">
					<a class="fancybox" href="<?= base_url('assets/') ?>images/portfolio2.jpg"
					   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
								class="fa fa-search"></span></a>
					<a href="#"><span class="fa fa-link"></span></a>
				</div>
			</div>

			<div class="grid-item isolation buildings">
				<img alt="" src="<?= base_url('assets/') ?>images/portfolio3.jpg">
				<div class="portfolio_hover_area">
					<a class="fancybox" href="<?= base_url('assets/') ?>images/portfolio3.jpg"
					   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
								class="fa fa-search"></span></a>
					<a href="#"><span class="fa fa-link"></span></a>
				</div>
			</div>

			<div class="grid-item plumbing isolation">
				<img alt="" src="<?= base_url('assets/') ?>images/portfolio4.jpg">
				<div class="portfolio_hover_area">
					<a class="fancybox" href="<?= base_url('assets/') ?>images/portfolio4.jpg"
					   data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
								class="fa fa-search"></span></a>
					<a href="#"><span class="fa fa-link"></span></a>
				</div>
			</div>
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
					<h4>Sobre companhia</h4>
					<img class="logo" src="<?= base_url('assets/') ?>images/logo.png" alt="Construction"/>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
						magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
						dolorem</p>

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
						<li><a href=""><span class="fa fa-play"></span> Our services</a>
						<li><a href=""><span class="fa fa-play"></span> Meet our team</a>
						<li><a href=""><span class="fa fa-play"></span> Forum</a>
						<li><a href=""><span class="fa fa-play"></span> Help center</a>
						<li><a href=""><span class="fa fa-play"></span> Contact Cekas</a>
						<li><a href=""><span class="fa fa-play"></span> Privacy Policy</a>
						<li><a href=""><span class="fa fa-play"></span> Cekas terms</a>
						<li><a href=""><span class="fa fa-play"></span> Site map</a>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-7">
				<div class="footer_item">
					<h4>Ultimas</h4>
					<ul class="list-unstyled post">
						<li><a href=""><span class="date">20 <small>AUG</small></span> Luptatum omittantur duo ne mpetus
								indoctum</a></li>
						<li><a href=""><span class="date">20 <small>AUG</small></span> Luptatum omittantur duo ne mpetus
								indoctum</a></li>
						<li><a href=""><span class="date">20 <small>AUG</small></span> Luptatum omittantur duo ne mpetus
								indoctum</a></li>
						<li><a href=""><span class="date">20 <small>AUG</small></span> Luptatum omittantur duo ne mpetus
								indoctum</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-5">
				<div class="footer_item">
					<h4>Contate-nos</h4>
					<ul class="list-unstyled footer_contact">
						<li><a href=""><span class="fa fa-map-marker"></span> 124 Luanda, Angola</a></li>
						<li><a href=""><span class="fa fa-envelope"></span> hello@example.com</a></li>
						<li><a href=""><span class="fa fa-mobile"></span>
								<p>+244 00 00 1234 <br/>+244 00 00 1234</p></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- Footer top end -->
	<div class="footer_bottom text-center">
		<p class="wow fadeInRight">
			<?= $title ?> by
			<a target="_blank" href="https://www.cykrotec.com">Cykrotec</a>
			<?= date('Y') ?>. All Rights Reserved
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
