<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
	<meta charset="utf-8">
	<title>Sementes e Viveiros - Login</title>
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
		<li><a href=<?php echo base_url()."home";?> class="active" >Página Inicial</a></li>
		<!--li><a href=<?php echo base_url()."sobre"?> >Sobre</a></li-->
		<!--li><a href=<?php echo base_url()."contato"?> >Contato</a></li-->
		<li><a href=<?php echo base_url()."contato"?> >Buscar</a></li>
</nav>
<div class="art-sheet clearfix">
	<div class="art-layout-wrapper clearfix">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
				<div class="art-layout-cell art-content clearfix">
						<article class="art-post art-article">
						<h2 class="art-postheader">Entrar</h2>
						<br>
						<p>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<p>
							<span id="okPagina" class="okinsert"><?php echo $ok ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >

											<form method="post" action=<?php echo base_url()."login/checklogin" ?> >
											<p>
												<label for="boxemail">Email</label>
												<input id="boxemail" type="text" name="email" size="40"/>
												<span id="erroEmail" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxsenha">Senha</label>
												<input id="boxsenha" name="senha" type="password" size="12" />
												<span id="erroSenha" class="erroinsert"></span>
											</p>
											<br><br>

												<p><a href="#" style="float: right;" onclick="$(this).closest('form').submit()" class="art-button" >Login</a></p>					
											<p>
												<p><a href=<?php echo base_url()."cadastrarUsuario"?>>Registrar</a></p>
												<p><a href=<?php echo base_url()."cadastrarUsuario"?>>Esqueceu a Senha?</a></p>
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
</body>
</html>