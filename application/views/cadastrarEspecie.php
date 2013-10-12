<!DOCTYPE html>
<?php session_start(); ?>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
	<meta charset="utf-8">
	<title>Sementes e Viveiros - Cadastro</title>
	<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/style.css"?> media="screen">
	<!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/style.responsive.css"?> media="all">

	<link rel="stylesheet" type="text/css" href=<?php echo base_url()."assets/ja3.css"?>>

	<script src=<?php echo base_url()."assets/jquery.js";?>></script>
	<script src=<?php echo base_url()."assets/script.js"?>></script>
	<script src=<?php echo base_url()."assets/script.responsive.js"?>></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<nav class="art-nav clearfix">
	<ul class="art-hmenu">
		<li><a href=<?php echo base_url()."home";?> class="active" >Home</a></li>
		<!--li><a href=<?php echo base_url()."sobre"?> >Sobre</a></li-->
		<!--li><a href=<?php echo base_url()."contato"?> >Contato</a></li-->
		<li><a href=<?php echo base_url()."contato"?> >Buscar</a></li>
</nav>
<div class="art-sheet clearfix">
	<div class="art-layout-wrapper clearfix">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
				<div class="art-layout-cell art-content clearfix">
					<div class="powerMenu">
						<p><h3>Olá, Você</h3></p>
						<p><a>Sair</a></p>
					</div>
					<article class="art-post art-article">
						<h2 class="art-postheader">Adicionar Espécie</h2>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >
										<form>
											<p>
												<label for="boxcient"> Nome Científico* </label>
												<input id="boxcient" type="text" name="cientifico"/>
												<span id="erroCient" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxfamilia">Família* </label>
												<input id="boxfamilia" type="text" name="familia"/>
												<span id="erroFami" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxpopul">Nome popular</label>
												<input id="boxpopul" type="text" name="popular"/>
											</p>
											<br><br>
											<p>
												<p><a href=<?php echo base_url()."cadastrarUsuario"?> class="art-button">Cadastrar</a></p>
											</p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'modules/footer.php'; ?>
</div>
<script>
$(document).ready(function() {
	$('#boxcient').focusout(function(){
		if($(this).val() == ''){
			$('#erroCient').html('Insira um nome científico!');
		}else{
			$('#erroCient').fadeOut(1000, function() {
				$(this).html('');
            });
		}
	});
	$('#boxfamilia').focusout(function(){
		if($(this).val() == ''){
			$('#erroFami').html('Insira o nome da família!');
		}else{
			$('#erroFami').fadeOut(1000, function() {
				$(this).html('');
            });
		}
	});
});
</script>
</body>
</html>