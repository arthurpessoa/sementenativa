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
					<?php include 'modules/powerMenu.php'; ?>
					<article class="art-post art-article">
						<h2 class="art-postheader">Adicionar Caracterização</h2>
						<p>
							<br>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >
										<form method="post" action=<?php echo base_url()."cadastrarCaracterizacao/checkCaracterizacao" ?>>
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
												<label>Data de colheita </label>
												<input id="boxdata" type="text" name="data"/>
												<span id="erroData" class="erroinsert"></span>
											</p>
											<p>
												<label>Local de origem da semente</label>
												<input id="boxlocorig" type="text" name="localOrigem"/>
											</p>
											<p>
												<label>Indicador de maturação</label>
												<input id="boxindic" type="text" name="matura"/>
											</p>
											<p>
												<label>Dispersão</label>
												<input id="boxdisp" type="text" name="dispersao"/>
											</p>
											<p>
												<label>Número de frutos por kilo</label>
												<input id="boxfpk" type="text" name="fpk" size="6"/>
											</p>
											<p>
												<label>Peso de mil frutos</label>
												<input id="boxpmf" type="text" name="pmf"/>
											</p>
											<p>
												<label>Número de sementes por kilo</label>
												<input id="boxspq" type="text" name="spk" size="6"/>
											</p>
											<p>
												<label>Peso de mil sementes</label>
												<input id="boxpms" type="text" name="pms"/>
											</p>
											<p>
												<label>Relação Fruto : Semente</label>
												<input id="boxfs" type="text" name="fs"/>
											</p>
											<p>
												<label>Tamanho da Semente</label>
												<textarea id="boxtamsem" type="text" name="tamsem"></textarea>
											</p>
											<p>
												<label>Tamanho do Fruto</label>
												<textarea id="boxtamfruto" type="text" name="tamfruto"></textarea>
											</p>
											<p>
												<label>Tipo de Fruto</label>
												<textarea id="boxtipofruto" type="text" name="tipofruto"></textarea>
											</p>
											<p>
												<label>Pureza</label>
												<input id="boxpureza" type="text" name="pureza" size="4"/>%
											</p>
											<p>
												<label>Observações</label>
												<textarea id="boxobs" type="text" name="obs"></textarea>
											</p>
											<p>
												<label>Fontes</label>
												<textarea id="boxfontes" type="text" name="fontes"></textarea>
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