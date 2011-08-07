<?php
	session_start();
?>
<!DOCTYPE HTML>
<!--

Olá. Seja bem vindo ao portifolio de Anderson Juhasc.
Por favor, não perca seu tempo copiando nada daqui. O código completo está em https://github.com/Anderson-Juhasc.

-->
<!--[if IE 7 ]> <html lang="pt-br" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="pt-br" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="pt-br"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<!-- disable iPhone inital scale -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Programador de interface, Front-end Developer(HTML5, CSS3, jQuery), sou freelancer, brasileiro, 22 anos e crio websites nos padrões e procuro sempre estar melhorando a qualidade para o seu projeto.">
	<meta name="keywords" content="webdesigner, freela, freelance, html5, xhtml, tableless, css, webstandards, javascript, jQuery, ajax, usabilidade, front-end, brasileiro, qualidade, interface, programador, desenvolvedor, padroes, web, especialista, qualidade, agilidade">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Anderson Juhasc">

	<link rel="shortcut icon" href="\favicon.ico">

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!--link rel="stylesheet/less" href="css/style.less">
	<script src="js/libs/less-1.1.3.min.js"></script-->

	<link rel="stylesheet" href="css/style.css">
	<style>
		/* LESS.JS NO SUPPORT HACK FOR OPACITY */
		.docked {
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)"; /* IE 8 */
			filter: alpha(opacity=60); /* IE 5-7 */
			opacity: 0.6;  /* Good browsers */
		}
		.docked:hover {
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"; /* IE 8 */
			filter: alpha(opacity=100); /* IE 5-7 */
			opacity: 1;  /* Good browsers */
		}
	</style>

	<title>Anderson Juhasc Freelancer Front-End, Programador de interface, Especialista HTML5, CSS3 e Javascript, Tableless, Padrões Web, Qualidade, Agilidade, São Paulo</title>

	<?php flush(); ?>
</head>
<body>
	<div id="container">

		<header>
			<div id="innerHeader">
				<h1 id="logotipo" class="left">
					<a href="index.php" title="Página Principal Anderson Juhasc">
						Anderson Juhasc Freelancer Front-End
					</a>
				</h1>

				<h2 class="right">Desenvolvimento de web interfaces, para freelancers e agências que querem fazer algo novo na internet.</h2>
			</div>

			<div id="innerNav" class="clear default">
				<nav>
					<ul id="navTop">
						<li><a href="#container" title="Principal" class="current anchorAnimate">Principal</a></li>
						<li><a href="#about" title="Sobre" class="anchorAnimate">Sobre</a></li>
						<li><a href="#portifolio" title="Portifolio" class="anchorAnimate anchorPort">Portifolio</a></li>
						<li><a href="#contact" title="Contato" class="anchorAnimate">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div id="main">
			<section id="index" class="sessionBox clearfix">
				<h2>Trabalho Recente</h1>

				<div id="slider">
					<div class="description desc1 hide">
						<h1>
							“Projeto Cão.com da agência <br />
							Hive de Florianopolis SC.”
						</h1>

						<strong>Serviço:</strong>

						<em>
							Interface desenvolvida utilizando <br />
							HTML5, LESS(CSS), @font-face e jQuery.
						</em>
					</div>

					<div class="description desc2 hide">
						<h1>
							“Projeto FattoaMano da agência <br />
							Hive de Florianopolis SC.”
						</h1>

						<strong>Serviço:</strong>

						<em>
							Interface desenvolvida utilizando <br />
							HTML5, LESS(CSS), @font-face e jQuery.
						</em>
					</div>

					<div class="description desc3 hide">
						<h1>
							“Projeto Conege Construções da <br />
							agência Hive de Florianopolis SC.”
						</h1>

						<strong>Serviço:</strong>

						<em>
							Interface desenvolvida utilizando <br />
							XHTML, CSS, @font-face e jQuery.
						</em>
					</div>

					<div class="description desc4 hide">
						<h1>
							“Projeto Pexinxaria da agência <br />
							Yama de Pres. Prudente SP.”
						</h1>

						<strong>Serviço:</strong>

						<em>
							Interface desenvolvida utilizando <br />
							HTML5, LESS(CSS), @font-face, PHP e jQuery.
						</em>
					</div>


					<ul id="runCycle">
						<li rel="desc1"><a class="anchorSlider" href="#portifolio" title="Cão.com"><img src="images/content/cao-large.jpg" alt="Cão.com" /></a></li>
						<li rel="desc2"><a class="anchorSlider" href="#portifolio" title="FattaMano"><img src="images/content/fattoamano-large.jpg" alt="FattaMano" /></a></li>
						<li rel="desc3"><a class="anchorSlider" href="#portifolio" title="Conege Construções"><img src="images/content/conege-large.jpg" alt="Conege Construções" /></a></li>
						<li rel="desc4"><a class="anchorSlider" href="#portifolio" title="Pexinxaria"><img src="images/content/pexinxaria-large.jpg" alt="Pexinxaria" /></a></li>
					</ul>

					<div id="runTitle">&nbsp;</div>
				</div>

				<div class="modBox help">
					<h3>Posso ajudá-lo:</h3>

					<ul>
						<li><span>Aumentar a velocidade de carregamento do seu Website</span></li>
						<li><span>Converter Design para HTML</span></li>
						<li><span>Desenvolver sites que funcionem com todos os navegadores do mercado</span></li>
					</ul>
				</div>

				<div class="modBox service">
					<h3>Serviços:</h3>

					<ul>
						<li><span>HTML5</span></li>
						<li><span>AJAX</span></li>
						<li><span>CSS3</span></li>
						<li><span>Usabilidade</span></li>
						<li><span>JavaScript</span></li>
						<li><span>Padrões Web</span></li>
						<li><span>jQuery</span></li>
						<li><span>PHP</span></li>
					</ul>
				</div>

				<div class="modBox contact">
					<h3>Entre em contato:</h3>

					<ul>
						<li class="fone" title="Telefone">55 11 8120.6828</li>
						<li class="email"><a href="mailto:anderson.juhasc@gmail.com" title="Gmail">anderson.juhasc@gmail.com</a></li>
						<li class="skype">anderson.juhasc</li>
						<li class="twitter"><a href="http://twitter.com/#!/anderson_juhasc" title="Twitter">twitter.com/anderson_juhasc</a></li>
					</ul>
				</div>
			</section> <!--! end of #index -->

			<section id="about" class="sessionBox clearfix">
				<h2>Sobre</h2>

				<div class="modBox">
					<img src="images/content/me.jpg" alt="Anderson Juhasc" />
					<div class="description">
						<h1>Anderson Juhasc (ju-as)</h1>
						<p>
							Sou <strong>Anderson Juhasc</strong>, 22 anos, sou de Presidente Prudente SP e dedico meu tempo ao trabalho, estudos, familia e amigos. Sou <strong>Desenvolvedor Front-End( Programador de Interface )</strong>. Tenho experiência de 2 anos no mercado, sou apaixonado pela internet e desenvolvo trabalhos com <strong>qualidade</strong>.
							<br /><br />
							Especialidade: <strong>HTML5</strong> + <strong>CSS3</strong> + <strong>jQuery</strong> + <strong>PHP</strong> + <strong>Qualidade</strong>
						</p>
						<a href="dl/Curriculo-Anderson-Juhasc.pdf" title="Saiba Mais" class="vitae left">Saiba Mais</a>
					</div>

					<div class="boxDepoimentos left">
						<h2>Depoimentos</h2>

						<article>
							<h3><a href="http://www.imaginis.com.br/" target="_blank" title="Agência imaginis">Carlos Duarte da Agência imaginis</a> - 05/08/11</h2>
							<p>São três os motivos que me levam a criar este depoimento ao <strong>Anderson</strong>: <strong>Qualidade</strong>, <strong>Agilidade</strong> e <strong>Atendimento</strong>. O trabalho executado surpreendeu pelo grau de complexidade, aliado ao fato de ter finalizado o mesmo antes do prazo final. Isso tudo agregado a um ótimo atendimento, fazem dele um parceiro confiável para os próximos projetos que estamos em vias de executar.</p>
						</article>
					</div>
				</div>
			</section> <!--! end of #about -->

			<section id="portifolio" class="sessionBox clearfix">
				<h2>Portifolio</h2>

				<div class="modBox">
					<div class="projBox clearfix">
						<div class="mosaic-block fade">
							<span class="mosaic-overlay">
								<div class="details">
									<h3>Projeto Cão.com da agência Hive de Florianopolis SC.</h3>
									<p>
										<strong>Serviços:</strong> HTML5, LESS(CSS), @font-face e jQuery.
									</p>
									<span>Site em Construção</span>
								</div>
							</span>
							<div class="mosaic-backdrop"><img src="images/content/cao-large.jpg" alt="Cão.com" /></div>
						</div>
						<div class="mosaic-block fade last-child">
							<span class="mosaic-overlay">
								<div class="details">
									<h3>Projeto FattoaMano da agência Hive de Florianopolis SC.</h3>
									<p>
										<strong>Serviços:</strong> HTML5, LESS(CSS), @font-face e jQuery.
									</p>
									<span>Site em Construção</span>
								</div>
							</span>
							<div class="mosaic-backdrop"><img src="images/content/fattoamano-large.jpg" alt="FattaMano" /></div>
						</div>
						<div class="mosaic-block fade terminado">
							<a href="http://www.conege.com.br/" title="Visitar Conege Construções" target="_blank" class="mosaic-overlay">
								<div class="details">
									<h3>Projeto Conege Construções da agência Hive de Florianopolis SC.</h3>
									<p>
										<strong>Serviços:</strong> XHTML, CSS, @font-face e jQuery.
									</p>
									<span class="link">Visitar Website</span>
								</div>
							</a>
							<div class="mosaic-backdrop"><img src="images/content/conege-large.jpg" alt="Conege Construções" /></div>
						</div>
						<div class="mosaic-block fade terminado last-child">
							<a href="http://www.pexinxaria.com.br/" title="Visitar Pexinxaria" target="_blank" class="mosaic-overlay">
								<div class="details">
									<h3>Agregador de compra coletiva Pexinxaria.</h3>
									<p>
										<strong>Serviços:</strong> HTML5, LESS(CSS), @font-face e jQuery.
									</p>
									<span class="link">Visitar Website</span>
								</div>
							</a>
							<div class="mosaic-backdrop"><img  src="images/content/pexinxaria-large.jpg" alt="Pexinxaria" /></div>
						</div>
					</div>
				</div>
			</section> <!--! end of #portifolio -->

			<section id="contact" class="sessionBox clearfix">
				<h2>Contato</h2>

				<div class="modBox contact">
					<ul>
						<li class="fone" title="Telefone">55 11 8120.6828</li>
						<li class="email"><a href="mailto:anderson.juhasc@gmail.com" title="Gmail">anderson.juhasc@gmail.com</a></li>
						<li class="skype">anderson.juhasc</li>
						<li class="twitter"><a href="http://twitter.com/#!/anderson_juhasc" title="Twitter">twitter.com/anderson_juhasc</a></li>
					</ul>
				</div>

				<div class="modBox">
					<p>Já que chegou até aqui, por que não pedir um orçamento?</p>

					<em>
						Disponível para Freelance, Orçamento e Bate-papo.<br />
						Os itens marcados com <strong>*</strong> são de preenchimento obrigatório!
					</em>

					<?php if ($_SESSION['errors']) { ?>
						<ul id="errors">
							<li id="info">Houve alguns problemas com o envio do formulário:</li>
							<?php
								echo $_SESSION['errors'];

								unset($_SESSION['errors']);
							?>
						</ul>
					<?php } elseif ($_SESSION['sucess']) {
							echo $_SESSION['sucess'];

							session_unset();
						}
					?>

					<form id="contato" action="inc/validContato.php" method="post">
						<fieldset>
							<div>
								<label for="">Nome: <span>*</span></label>
								<input type="text" name="name" placeholder="ex: João Paulo" value="<?php echo $_SESSION['name'] ?>" />
							</div>

							<div>
								<label for="">Email: <span>*</span></label>
								<input type="text" name="email" placeholder="ex: joao.paulo@exemplo.com.br" value="<?php echo $_SESSION['email'] ?>" />
							</div>

							<div>
								<label for="subject">Assunto:</label>
								<select name="subject" id="subject">
									<option value="Freelance" <?php echo $_SESSION['subject'] == 'Freelance' ? "selected='selected'" : '' ?>>Freelance</option>
									<option value="Orçamento" <?php echo $_SESSION['subject'] == 'Orçamento' ? "selected='selected'" : '' ?>>Orçamento</option>
									<option value="Bate-papo" <?php echo $_SESSION['subject'] == 'Bate-papo' ? "selected='selected'" : '' ?>>Bate-papo</option>
								</select>
							</div>

							<div>
								<label for="">Mensagem: <span>*</span></label>
								<textarea name="msg" cols="30" rows="10" placeholder="Sua mensagem deve ter no mínimo 20 caracteres"><?php echo $_SESSION['msg'] ?></textarea>
							</div>

							<button type="submit" name="contact" class="btn blue right">ENVIAR</button>
						</fieldset>
					</form>
				</div>
			</section> <!--! end of #contact -->
		</div> <!--! end of #main -->

		<footer>
			<p>Copyright &copy <?php echo date("Y"); ?> Anderson Juhasc Freelancer Front-End</p>
		</footer>

		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	  	<script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


	  	<!-- scripts concatenated and minified via ant build script-->
	  	<script src="js/plugins.js"></script>
	  	<script src="js/script.js"></script>
	  	<!-- end scripts-->

		<script>
			var _gaq=[['_setAccount','UA-24711004-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

	</div> <!--! end of #container -->
</body>
</html>
