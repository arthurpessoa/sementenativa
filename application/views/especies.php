<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Sementes e Viveiros - Sobre</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href=<?php echo base_url()."assets/style.css"?> media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href=<?php echo base_url()."assets/style.responsive.css"?> media="all">

	<link rel="stylesheet" type="text/css" href=<?php echo base_url()."assets/ja3.css"?>>

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
					<article class="art-post art-article">
						<h2 class="art-postheader">Cadastro de Usuário</h2>
						<p>
							<br>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 130%" >
											<form method="post" action=<?php echo base_url()."cadastrarUsuario/checkCadastro" ?>>
											<p>
												<label for="boxnome">Nome*</label>
												<input id="boxnome" type="text" name="nome" size="40"/>
												<span  hidden id="erroNomeVazio" class="erroinsert">*Não deve ser vazio</span>
												<span  hidden id="erroNomeNumero" class="erroinsert">*Nome não deve conter números</span>
												<span  hidden id="erroNomeGrande" class="erroinsert">*Nome deve conter no máximo 40 letras</span>
											</p>
											<p>
												<label for="boxemail">Email*</label>
												<input id="boxemail" type="text" name="email" size="40"/>
												<span hidden id="erroEmail" class="erroinsert">*e-mail inválido</span>
											</p>
											<p>
												<label for="boxsexo">Sexo</label>
												<input id="sexo" type="radio" name="sexo" value="m" checked/>Masculino
												<input id="sexo" type="radio" name="sexo" value="f"/>Feminino
												<span id="erroSexo" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxcep">CEP</label>
												<input name="cep" type="text" id="boxcep" value="" size="8" maxlength="8"/> (Sem traço)
												<span hidden id="erroCepForma" class="erroinsert">*CEP não deve conter "-"</span>
												<span hidden id="erroCepTamanho" class="erroinsert">*CEP deve conter 8 numeros</span>
											</p>
											<p>
												<label for="boxend">Endereço</label>
												<input id="boxend" name="endereco" type="text" size="40" />
												<span hidden id="erroEnd" class="erroinsert">*Endereço não pode ser vazio</span>
											</p>
											<p>
												<label for="boxnum">Número</label>
												<input id="boxnum" name="num" type="text" size="5"/>
												<span hidden id="erroNumVazio" class="erroinsert">*Numero não pode ser vazio</span>
												<span hidden id="erroNumLetras" class="erroinsert">*Numero não pode conter letras</span>
											</p>
											<p>
												<label for="boxbairro">Bairro</label>
												<input id="boxbairro" name="bairro" type="text" id="bairro" size="30" />
												<span hidden id="erroBairro" class="erroinsert">*Bairro não pode ser vazio</span>
											</p>
											<p>
												<label for="boxcidade">Cidade</label>
												<input id="boxcidade" name="cidade" type="text" size="40" />
												<span hidden id="erroCidade" class="erroinsert">*Cidade não pode ser vazio</span>
											</p>
											<p>
												<label for="boxuf">Estado</label>
												<input id="boxuf" name="uf" type="text" size="2" />
												<span hidden id="erroUF" class="erroinsert">*Estado não pode ser vazio</span>
											</p>
											<p>
												<label for="boxsenha">Senha</label>
												<input id="boxsenha" name="senha" type="password" size="12" />
												<span hidden id="erroSenha" class="erroinsert">*Senha não pode ser vazia</span>
											</p>
											<p>
												<label for="boxconfirmasenha">Confirmar Senha</label>
												<input id="boxconfirmasenha" name="confirmasenha" type="password" size="12" />
												<span hidden id="erroConfirmaSenha" class="erroinsert">*Confirmação diferente da senha digitada</span>
											</p>
											<br><br>
											<p>
												<p><a id="EnviarCadastro" href="#" style="float: right;" onclick="" class="art-button" >Cadastrar</a></p>
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


</body></html>