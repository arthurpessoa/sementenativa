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
												<input type='hidden' name='especieid' id='especieid' value=''>
												<label for="especie">Especie* </label>
												

												<p class="open"><input id="especie" type="text" name="especie"/>
												<a id="selecionarEsp" href="#" style="" onclick="" class="art-button" >Procurar...</a></p>
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