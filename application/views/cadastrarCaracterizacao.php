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


  
#lightbox{
    display:none;
    position:absolute;
    z-index:1000;
    background:url(http://images3.wikia.nocookie.net/__cb20110703044636/umemaro3d/images/b/b4/Bg-white-50.png);
    width:100%;
    height:100%;
}
#lightbox_area{
    position:relative;
    margin:50px auto;
    background:#fff;
    width:50%;
    height:300px;
    padding:23px;
    border:1px solid #444;
    border-radius:20px;
}
  .open{
    cursor:pointer;
  }
  .close{
    cursor:pointer;
    border:1px solid #444;
    width:25px;
    height:25px;
    line-height:24px;
    border-radius:20px;
    text-align:center;
    position:absolute;
    right:-8px;
    top:-28px;
    background:#e11;
    color:#fff;
  }



</style></head>
<body>


<div id="lightbox">
  <div id="lightbox_area">
    <h2>Buscar Espécies</h2>
    <br><br>

    <h5>Digite o nome vulgar ou parte dele, e clique em "Buscar", após isso clique na espécie desejada</h5>

	<p><input id="boxespecie" type="text" name="nomeespecie" style="width: 80%;"/>
	<a id="selecionarEsp" href="#" style="" onclick="" class="art-button" >Buscar</a></p>

    <p class="close"><b>X</b></p>
  </div>
</div>





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
		<li><a href=<?php echo base_url()."cadastrarCaracterizacao"?> class="active" >Cadastrar Caracterização</a></li>
		<li><a href=<?php echo base_url()."ajuda";?> >Ajuda</a></li>
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
												<p class="open"><input id="boxespecie" type="text" name="nomeespecie" disabled="disabled"/>
												<a id="selecionarEsp" href="#" style="" onclick="" class="art-button" >Buscar Espécie</a></p>
												<span id="erroEspecie" class="erroinsert"></span>
											</p>
											
											<br><br>
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


$('.open').click(function(){
  $('#lightbox').fadeTo(1000, 1);
  $("#wrapper").css({'text-shadow': '0px 0px 10px #000'});
  $("body").css("overflow", "hidden");
});

$('.close').click(function(){
  $('#lightbox').hide();
  $("#wrapper").css({'text-shadow': '0px 0px 0px #000'});
   $("body").css("overflow", "visible");
});


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