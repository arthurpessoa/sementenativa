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
		<li><a href=<?php echo base_url()."cadastrarEspecie"?> class="active" >Cadastrar Colheita</a></li>
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
						<h2 class="art-postheader">Adicionar Colheita e Manejo</h2>
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
												<label for="boxnRev">Número da revista</label>
												<input id="boxnRev" name="nRev"size="6"/>
											</p>
											<p>
												<label for="boxtitu">Título do Artigo</label>
												<textarea id="boxtitu" name="titu"></textarea>
											</p>
											<p id="autores">
												<label for="boxauto">Autor 1</label>
												<input id="boxauto" name="auto1"/>
											
                                            	<a id="addAut" href="#" style="float: right;" onclick="" class="art-button" >+</a>
												<a id="rmAut" href="#" style="float: right;" onclick="" class="art-button" >-</a>

											</p>
											<p>
												<label for="boxrevi">Revista</label>
												<input id="boxrevi" name="revi"/>
											</p>
											<p>
												<label for="boxano">Ano</label>
												<input id="boxano" name="ano"size="6"/>
											</p>
											<p>
												<label for="boxvolu">Volume</label>
												<input id="boxvolu" name="volu"size="6"/>
											</p>
											<p>
												<label for="boxpagI">Página Inicial</label>
												<input id="boxpagI" name="pagI"size="6"/>
											</p>
											<p>
												<label for="boxpagE">Página Final</label>
												<input id="boxpagE" name="pagE"size="6"/>
											</p>
											<p>
												<label for="boxclas">Classificador</label>
												<input id="boxclas" name="clas"/>
											</p>
											<p>
												<label for="boxloca">Local de Colheita</label>
												<input id="boxloca" name="loca"/>
											</p>
											<p>
												<label for="boxflor">Floração</label>
												<input id="boxflor" name="flor"/>
											</p>
											<p>
												<label for="boxperi">Período de Colheita</label>
												<input id="boxperi" name="peri"/>
											</p>
											<p>
												<label for="boxmeto">Método de Colheita</label>
												<textarea id="boxmeto" name="meto"></textarea>
											</p>
											<p>
												<label for="boxequi">Equipamentos de colheita usados</label>
												<textarea id="boxequi" name="equi"></textarea>
											</p>
											<p>
												<label for="boxtempc">Tempo de Colheita</label>
												<input id="boxtempc" name="tempc"/>
											</p>
											<p>
												<label for="boxtempsf">Tempo de secagem dos frutos</label>
												<input id="boxtempsf" name="tempsf"/>
											</p>
											<p>
												<label for="boxcond">Condições de Secagem</label>
												<input id="boxcond" name="cond"/>
											</p>
											<p>
												<label for="boxmeto">Método de extração das sementes</label>
												<input id="boxmeto" name="meto"/>
											</p>
											<p>
												<label for="boxqueb">Tratamento para quebra de dormência</label>
												<textarea id="boxqueb" name="queb"></textarea>
											</p>
											<p>
												<label for="boxtemp">Tempo de beneficiamento</label>
												<input id="boxtemp" name="temp"/>
											</p>
											<p>
												<label for="boxarma">Armazenamento Pós-colheita</label>
												<input id="boxarma" name="arma"/>
											</p>
											<p>
												<label for="boxsubs">Substrato</label>
												<input id="boxsubs" name="subs"/>
											</p>
											<p>
												<label for="boxtemp">Temperatura</label>
												<input id="boxtemp" name="temp"/>
											</p>
											<p>
												<label for="boxfoto">Fotoperíodo</label>
												<input id="boxfoto" name="foto"/>
											</p>
											<p>
												<label for="boxtrat">Tratamentos</label>
												<textarea id="boxtrat" name="trat"></textarea>
											</p>
											<p>
												<label for="boxmelh">Melhor porcentagem de Germinação</label>
												<input id="boxmelh" name="melh"size="6"/>
											</p>
											<p>
												<label for="boxtest">Testes Realizados</label>
												<input id="boxtest" name="test"/>
											</p>
											<p>
												<label for="boxmeto">Metodologia</label>
												<textarea id="boxmeto" name="meto"></textarea>
											</p>
											<p>
												<label for="boxreco">Recomendações</label>
												<textarea id="boxreco" name="reco"></textarea>
											</p>
											<p>
												<label for="boxobse">Observações</label>
												<textarea id="boxobse" name="obse"></textarea>
											</p>
											<p>
												<label for="boxfont">Fontes</label>
												<textarea id="boxfont" name="font"></textarea>
											</p>

											<br><br>
											<p>
												<p><a id="EnviarCadastro" href="#" style="float: right;" onclick="" class="art-button" >Cadastrar</a></p>
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
	autores = 1;
	$('#addAut').click(function(){
		autores++;
		$('#autores').append(
			"<p id=\"auto"+autores+"\"><label for=\"boxauto\">Autor " + autores + "</label>"
			+"<input id=\"boxauto\" name=\"auto"+autores+"\"/></p>");
	});
	$('#rmAut').click(function(){
		if(autores > 1){
			$('#auto' + autores.toString()).remove();
			autores--;
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