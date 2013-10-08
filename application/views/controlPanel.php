<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
	<meta charset="utf-8">
	<title>Semente Nativa - Painel de Controle</title>
	<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/style.css"?> media="screen">
	<!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/style.responsive.css"?> media="all">


	<script src=<?php echo base_url()."assets/jquery.js";?>></script>
	<script src=<?php echo base_url()."assets/script.js";?>></script>
	<script src=<?php echo base_url()."assets/script.responsive.js";?>></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
   <nav class="art-nav clearfix">
	<ul class="art-hmenu">
		<li><a href=<?php echo base_url()."home";?>	class="active">Home</a></li>
		<li><a href=<?php echo base_url()."sobre"?> >Sobre</a></li>
		<li><a href=<?php echo base_url()."contato"?> >Contato</a></li>
	</nav>
<div class="art-sheet clearfix">
	<div class="art-layout-wrapper clearfix">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
				<div class="art-layout-cell art-content clearfix">
					<article class="art-post art-article">
						<h2 class="art-postheader">Painel de Controle</h2>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%">
										<div class="exibirUsuarios" style="width: 65%;border-style: dotted;float: left">
										<br><br>
										<p><h3>Usuários</h3></p>
										<p>
											<b><a>Username01</a></b>
											&nbsp&nbsp&nbsp
											Nome Completo 01
											&nbsp&nbsp&nbsp
											email01@gmail.com
											&nbsp&nbsp&nbsp
											Telefone 01
											<form>
											<input type="checkbox" name="admin">Administrador</input>
											<input type="checkbox" name="pesq">Pesquisador</input>
											<input type="checkbox" name="prod">Produtor</input>
											</form>
											<button>Salvar Alterações</button>
											<button id='btnApagar'>Apagar</button>
										</p>
										<br>
										<p>
											<b><a>Username02</a></b>
											&nbsp&nbsp&nbsp
											Nome Completo 02
											&nbsp&nbsp&nbsp
											email02@gmail.com
											&nbsp&nbsp&nbsp
											Telefone 02
											<form>
											<input type="checkbox" name="admin">Administrador</input>
											<input type="checkbox" name="pesq">Pesquisador</input>
											<input type="checkbox" name="prod">Produtor</input>
											</form>
											<button>Salvar Alterações</button>
											<button id='btnApagar'>Apagar</button>
										</p>
										<br>
										<p>
											<b><a>Username03</a></b>
											&nbsp&nbsp&nbsp
											Nome Completo 03
											&nbsp&nbsp&nbsp
											email03@gmail.com
											&nbsp&nbsp&nbsp
											Telefone 03
											<form>
											<input type="checkbox" name="admin">Administrador</input>
											<input type="checkbox" name="pesq">Pesquisador</input>
											<input type="checkbox" name="prod">Produtor</input>
											</form>
											<button>Salvar Alterações</button>
											<button id='btnApagar'>Apagar</button>
										</p>
										<br>
										</div>
										<div class="powerMenu" style="width: 30%;border-style: dotted;float: left">
											<br><br>
											<p><h3>Olá, Administrador</h3></p>
											<p><a>Sair</a></p>
										</div>
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
<script>
	$(document).ready(function() {
		$('#btnApagar').click(function(){
			var conf = confirm('Tem certeza que deseja apagar?');
			alert(conf);
		});
	});
</script>
</div>
</body>

</html>