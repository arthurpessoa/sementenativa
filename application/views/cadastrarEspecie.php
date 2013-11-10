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
		   <li><a href=<?php echo base_url()."home";?>>Página Inicial</a></li>
        <li><a href=<?php echo base_url()."sobre"?>               >Sobre</a></li>
        <li><a href=<?php echo base_url()."contato"?>               >Contato</a></li>
	</ul>
</nav>
<nav class="art-nav clearfix" style="   background: #6DAF28;">
	<ul class="art-hmenu" style="height: 29px;">
		<li><a href=<?php echo base_url()."controlPanel";?> >Ferramentas</a></li>
		<li><a href=<?php echo base_url()."cadastrarEspecie"?> class="active" >Cadastrar Espécie</a></li>
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
						<h2 class="art-postheader">Adicionar Espécie</h2>
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
										<form method="post" action=<?php echo base_url()."cadastrarEspecie/checkEspecie" ?>>
											<p>
												<label for="boxcient"> Nome Científico* </label>
												<input id="boxcient" type="text" name="cientifico"/>
												<span hidden id="erroCient" class="erroinsert">*Iinsira um nome científico</span>
												<span hidden id="erroIgual" class="erroinsert">*Nome e família iguais</span>
											</p>
											<p>
												<label for="boxfamilia">Família* </label>
												<input id="boxfamilia" type="text" name="familia"/>
												<span hidden id="erroFami" class="erroinsert">*Insira uma família</span>
												
											</p>
											<p id="nompop">
												<label for="boxpopul">Nome popular 1</label>
												<input id="boxpopul" type="text" name="popular1"/>
												<a id="addNp" href="#" style="float: right;" onclick="" class="art-button" >+</a>
												<a id="rmNp" href="#" style="float: right;" onclick="" class="art-button" >-</a>
              
											</p>
											               
											<br><br>

											<p>
												<!--p><button id="EnviarCadastro" type="submit" style="float: right;" onclick="" class="art-button" >Cadastrar</button></p-->
											

												<div style="position:relative;float:right;">
												<a id="EnviarCadastro" href="#" onclick=""  class="art-button" >Cadastrar</a>
												</div>
												<div style="position:relative;float:right;margin-right:0.5cm;">
												<a href=<?php echo base_url()."controlPanel";?>  onclick="" class="art-button">Voltar</a>
											    </div>
												
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
	erro=2;
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
	
});
</script>
<script src="js\jquery-1.6.2.min.js"></script>
    <script type="text/javascript">
           $(document).ready(function(){
           $('#EnviarCadastro').click(function(){
           
           	var family = $("#boxfamilia").val();
           	var nome = $("#boxcient").val();
           	var erro = 0;
           if(nome.length <= 0)
            {
           		erro=1;
           		$('#erroCient').show()
           	}else{	
           		if(nome == family){
           			$('#erroCient').hide()
           			$('#erroFami').hide()
           			erro=1;
           			$("#erroIgual").show()
           		}else{
           			$("#erroIgual").hide()
           		}
           		//$('#erroCient').fadeOut(1000, function() {
            }
           	
           	if(family.length <=0)
           	{
           		erro=1;
           		$('#erroFami').show()
           	}else{
           		//$('#erroFami').fadeOut(1000, function() {
				$('#erroFami').hide()
           	}
           	
           		
           if(erro==0){
        		$(this).closest('form').submit();
        	}else{
        		erro=0;
        	}
        	});
           });
	</script>
</body>
</html>