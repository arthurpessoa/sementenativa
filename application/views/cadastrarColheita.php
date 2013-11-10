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

	<p><input id="boxespecie" type="text" name="boxespecie" style="width: 80%;"/>
	<a id="selecionarEsp" href="#" style="" onclick="buscaEspecie(document.getElementById('boxespecie').value)" class="art-button" >Buscar</a></p>
    <p class="close"><b>X</b></p>
    

    <div id="result">
    </div>
  </div>
</div>



<div id="art-main">
<nav class="art-nav clearfix">
	<ul class="art-hmenu">
		   <li><a href=<?php echo base_url()."home";?>>Página Inicial</a></li>
        <li><a href=<?php echo base_url()."sobre"?>               >Sobre</a></li>
        <li><a href=<?php echo base_url()."contato"?>               >Contato</a></li>
	</ul>
</nav>
<nav class="art-nav clearfix" style="   background: #6DAF28;">
	<ul class="art-hmenu" style="height: 29px;">
		<li><a href=<?php echo base_url()."controlPanel";?> >Ferramentas</a></li>
		<li><a href=<?php echo base_url()."cadastrarColheita"?> class="active" >Cadastrar Colheita</a></li>
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
						<br>
						<p>
							<span id="okPagina" class="okinsert"><?php echo $ok ?></span>
						</p>
						<p>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >
										<form method="post" action=<?php echo base_url()."cadastrarColheita/checkColheita" ?>>
											

											<p>
												<label for="especie">Especie* </label>
												<p class="open">
													<input id="especie" type="text" name="especie"/>
													<a id="selecionarEsp" href="#" style="" onclick="" class="art-button" >Procurar...</a>
												</p>
												<span id="erroEspecie" class="erroinsert"></span>
											</p>



											<input type="hidden" name="email" value=<?php echo $this->session->userdata('email');?>>
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
												<textarea id="boxmeto" name="metoc"></textarea>
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
												<input id="boxmeto" name="metoe"/>
											</p>
											<p>
												<label for="boxqueb">Tratamento para quebra de dormência</label>
												<textarea id="boxqueb" name="queb"></textarea>
											</p>
											<p>
												<label for="boxtemp">Tempo de beneficiamento</label>
												<input id="boxtemp" name="tempob"/>
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
												<input id="boxtemp" name="temper"/>
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
												<textarea id="boxmeto" name="metod"></textarea>
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
												<p><button type="submit" id="EnviarCadastro" href="#" style="float: right;" class="art-button" >Cadastrar</button></p>
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

function buscaEspecie(str){
  	if (str=="")
  	{
  		document.getElementById("result").innerHTML="";
  		return;
  	}
  	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function()
    {
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    		document.getElementById("result").innerHTML=xmlhttp.responseText;
    	}
  	}

	xmlhttp.open("GET","cadastrarCaracterizacao/buscaEspecie?q="+str,true);
	xmlhttp.send();
}

function BuscaParaTextbox(str)
{
	document.getElementById('especie').value=str;
	$('#lightbox').hide();
  	$("#wrapper").css({'text-shadow': '0px 0px 0px #000'});
    $("body").css("overflow", "visible");
}


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