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
		   <li><a href=<?php echo base_url()."home";?>>Home</a></li>
        <li><a href=<?php echo base_url()."sobre"?>               >Sobre</a></li>
        <li><a href=<?php echo base_url()."contato"?>               >Contato</a></li>
	</ul>
</nav>
<nav class="art-nav clearfix" style="   background: #6DAF28;">
	<ul class="art-hmenu" style="height: 29px;">
		<li><a href=<?php echo base_url()."controlPanel";?> >Painel de Controle</a></li>
		<li><a href=<?php echo base_url()."cadastrarGerminacao"?> class="active" >Cadastrar Germinação</a></li>
		<li><a href=<?php echo base_url()."ajuda";?> >Ajuda</a></li>
	</ul>
</nav>
<div class="art-sheet clearfix">
	<div class="art-layout-wrapper clearfix">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
				<div class="art-layout-cell art-content clearfix">
					<?php include 'modules/powerMenu.php'; ?>
					<article class="art-post art-article">
						<h2 class="art-postheader">Cadastro de Germinação</h2>
						<p>
							<br>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >
										<form method="post" action=<?php echo base_url()."cadastrarGerminacao/checkGerminacao" ?>>
											<p>
												<label for="selespecie">Especie* </label>
												<select id="selespecie" type="text" name="especie">
													<option value=""/>
													<?php
														$espc = count($especies);
														for($i = 0; $i < $espc; $i++){
															echo "<option value=\"".$especies[$i]."\">".$especies[$i]."</option>";
														}
													?>
												</select>
												<span id="erroEspecie" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxtemp">Temperatura </label>
												<input id="boxtemp" name="temp" type="text"/>
											</p>
											<p>
												<label for="boxsubs">Substrato </label>
												<input id="boxsubs" name="subs" type="text"/>
											</p>
											<p>
												<label for="boxdescs">Descrição da Semente </label>
												<textarea id="boxdescs" name="descs" type="text"></textarea>
											</p>
											<p>
												<label for="boxsemkg">Numero de sementes por kilo </label>
												<input id="boxsemkg" name="semkg" type="text" size="6"/>
											</p>
											<p>
												<label for="boxpeso">Peso de Mil Sementes </label>
												<input id="boxpeso" name="peso" type="text" size="6"/>
											</p>
											<p>
												<label for="boxrepet">Número de sementes por Repetição </label>
												<input id="boxrepet" name="repet" type="text" size="6"/>
											</p>
											<p>
												<label for="boxnrepet">Número de Repetições </label>
												<input id="boxnrepet" name="nrepet" type="text" size="6"/>
											</p>
											<p>
												<label for="boxqd">Tratamento para quebra de Dormência </label>
												<textarea id="boxqd" name="qd" type="text"></textarea>
											</p>
											<p>
												<label for="boxdataini">Data de início do teste </label>
												<input id="boxdataini" name="dataini" type="text"/>
											</p>
											<p>
												<label for="boxtempger">Inicio da germinação (dias) </label>
												<input id="boxtempger" name="tempger" type="text"/>
											</p>
											<p>
												<label for="boxdatafim">Data de encerramento do teste </label>
												<input id="boxdatafim" name="datafim" type="text"/>
											</p>
											<p>
												<label for="boxtipoluz">Tipo de luz utilizada </label>
												<input id="boxtipoluz" name="tipoluz" type="text"/>
											</p>
											<p>
												<label for="boxumisubs">Umidade do Substrato </label>
												<input id="boxumisub" name="umisub" type="text"/>
											</p>
											<p>
												<label for="boxtestegerm">Teste de germinação das sementes </label>
												<textarea id="boxtestegerm" name="testegerm" type="text"></textarea>
											</p>
											<p>
												<label for="boxfontes">Fontes </label>
												<textarea id="boxfontes" name="fontes" type="text"></textarea>
											</p>
											<br><br>
											<p>

												<p><button type="submit" id="EnviarCadastro" href="#" style="float: right;" onclick="" class="art-button" >Cadastrar</button></p>
												<p><a href=<?php echo base_url()."controlPanel";?> style="float: right;" onclick="" class="art-button" >Voltar</a></p>
									
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
	nomPop = 1;
	$('#addNp').click(function(){
		nomPop++;
		$('#nompop').append(
			"<p id=\"pop"+nomPop+"\"><label for=\"boxpopul\">Nome popular " + nomPop + "</label>"
			+"<input id=\"boxpopul\" type=\"text\" name=\"popular"+nomPop+"\"/></p>");
	});
	$('#rmNp').click(function(){
		if(nomPop > 1){
			$('#pop' + nomPop.toString()).remove();
			nomPop--;
		}
	});
	$('#selespecie').focusout(function(){
		if($(this).val() == ''){
			$('#erroEspecie').html('Cadastrar espécie?');
		}else{
			$('#erroEspecie').fadeOut(1000, function() {
				$(this).html('');
            });
		}
	});
});
</script>
</body>
</html>