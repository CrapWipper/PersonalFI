<!DOCTYPE html>
<html <?php language_attributes()?> >
	<head>
		<meta charset="<?php bloginfo('charset') ?>" />
		<title><?php wp_title('-',true,'right'); bloginfo()?></title>
	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css"/>
		<!--Para mostrar a barra de administrador do WP-->
		<?php wp_head();?>
	</head>
	<body><!--O Body será fechado no footer.php outro arquivo-->

		<div id="header">
			<div id="header-superior">
				<div id="header-superior-content">
					<div id="header-paginas">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Arquivos</a></li>
							<li><a href="#">Sobre Nós</a></li>
							<li><a href="#">Serviços</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</div><!-- Fim header-paginas -->
					<div id="header-social">
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/ESC/facebook.jpg" rel="" title="" ></a>
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/ESC/googleplus.jpg" rel="" title="" ></a>
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/ESC/instagram.jpg" rel="" title="" ></a>
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/ESC/twitter.jpg" rel="" title="" ></a>
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/ESC/linkedin.jpg" rel="" title="" ></a>
					</div><!-- Fim header-social -->
				</div><!-- Fim header-superior-content  -->
			</div><!-- Fim header-superior  -->
			<div id="header-content">
				<div id="logo">
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/LOGO-FI.png" rel="" title="" ></a>
				</div><!-- Fim logo -->
				<div id="search">
					<form action="" method="post">
						<input type="text" name="">
						<input type="submit" value="" class="btn-search" name="">
					</form>
				</div><!-- Fim search -->
				<div id="login">
					<ul>
						<li class="logar" ><a href="">Login</a></li>
						<li class="registre"><a href="">Registre-se</a></li>
					</ul>
				</div><!-- Fim search -->
			</div><!-- Fim header-content -->
			<div id="nav">
				<div id="nav-content">
					
					<ul>
						<!--Barra de Menu principal-->
						<li><a href="#">Notícias</a></li>
						<li>
							<a href="#">Esportes</a>
							<!--Sub menu-->
							<ul>
								<li><a href="#">Futebol</a></li>
								<li><a href="#">Tênis</a></li>
								<li><a href="#">Atletismo</a></li>
							</ul>
					
						</li>
						<li><a href="#"></a>
													<ul>
								<li><a href="#">Futebol</a></li>
								<li><a href="#">Tênis</a></li>
								<li><a href="#">Atletismo</a></li>
							</ul>
						</li>
						<li><a href="#">Tecnologia</a></li>
						<li><a href="#">Entretenimento</a></li>
						<li><a href="#">Multimídias</a></li>
						<li><a href="#">Saúde</a></li>
						<li><a href="#">Política</a></li>
						<li><a href="#">Games</a></li>
					</ul>	

				</div><!-- Fim nav-content -->
			</div><!-- Fim nav -->
		</div><!-- Fim header -->