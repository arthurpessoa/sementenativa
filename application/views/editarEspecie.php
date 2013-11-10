<!DOCTYPE html>
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
						<h2 class="art-postheader">Cadastro de Usuário</h2>
						<p>
							<br>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >
											<form method="post" action=<?php echo base_url()."cadastrarUsuario/checkCadastro" ?>>
											<p>
												<label for="boxnome">Nome*</label>
												<input id="boxnome" type="text" name="nome" size="40"/>
												<span id="erroNome" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxemail">Email*</label>
												<input id="boxemail" type="text" name="email" size="40"/>
												<span id="erroEmail" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxsexo">Sexo</label>
												<input type="radio" name="sexo" value="m"/>Masculino
												<input type="radio" name="sexo" value="f"/>Feminino
												<span id="erroSexo" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxcep">CEP</label>
												<input name="cep" type="text" id="boxcep" value="" size="8" maxlength="8"/> (Sem traço)
												<span id="erroCep" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxend">Endereço</label>
												<input id="boxend" name="endereco" type="text" size="40" />
												<span id="erroEnd" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxnum">Número</label>
												<input id="boxnum" name="num" type="text" size="5"/>
												<span id="erroNum" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxbairro">Bairro</label>
												<input id="boxbairro" name="bairro" type="text" id="bairro" size="30" />
												<span id="erroBairro" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxcidade">Cidade</label>
												<input id="boxcidade" name="cidade" type="text" size="40" />
												<span id="erroCidade" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxuf">Estado</label>
												<input id="boxuf" name="uf" type="text" size="2" />
												<span id="erroUF" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxsenha">Senha</label>
												<input id="boxsenha" name="senha" type="password" size="12" />
												<span id="erroSenha" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxconfirmasenha">Confirmar Senha</label>
												<input id="boxconfirmasenha" name="confirmasenha" type="password" size="12" />
												<span id="erroConfirmaSenha" class="erroinsert"></span>
											</p>
											<br><br>
											<p>
												<p><a href="#" style="float: right;" onclick="$(this).closest('form').submit()" class="art-button" >Cadastrar</a></p>
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
$(document).ready(function(){
	//Preenche os campos na a&#231;&#227;o "Blur" (mudar de campo)
	$("#boxcep").blur(function(){
		$("#boxend").val("...")
		$("#boxbairro").val("...")
		$("#boxcidade").val("...")
		$("#boxuf").val("...")
			
		// seta a variavel requisitada no campo cep
		consulta = $("#boxcep").val()
					
		//Realiza a consulta
		/*Realiza a consulta atrav&#233;s do toolsweb passando o cep como parametro
		 e informando que vamos consultar no tipo javascript
		*/
		$.getScript("http://www.toolsweb.com.br/webservice/clienteWebService.php?cep="+consulta+"&formato=javascript", function(){
			//unescape - Decodifica uma string codificada com o m&#233;todo escape.
			rua=unescape(resultadoCEP.logradouro)
			bairro=unescape(resultadoCEP.bairro)
			cidade=unescape(resultadoCEP.cidade)
			uf=unescape(resultadoCEP.estado)
							
			// preenche os campos
			$("#boxend").val(rua)
			$("#boxbairro").val(bairro)
			$("#boxcidade").val(cidade)
			$("#boxuf").val(uf)
		});
	});
});

</script>
</body>
</html>