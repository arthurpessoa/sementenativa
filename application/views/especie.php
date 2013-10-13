<!DOCTYPE html>
<?php session_start(); ?>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
	<meta charset="utf-8">
	<title>Perfil</title>
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
		<li><a href=<?php echo base_url()."ajuda";?> class="active"  >Espécie</a></li>
		<li><a href=<?php echo base_url()."ajuda";?> >Ajuda</a></li>
	</ul>
</nav>

<div class="art-sheet clearfix">
			<div class="art-layout-wrapper clearfix">
				<div class="art-content-layout">
					<div class="art-content-layout-row">
						<div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
								<h2 class="art-postheader">Espécie</h2>
												
				<div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
	<div class="art-content-layout-row">
	<div class="art-layout-cell layout-item-0" style="width: 100%" >
		<p><span style="font-weight: bold; font-size: 16px">Nome Científico</span></p>
		<p><?php echo $data['cientifico'][0]?></p>
		<p><span style="font-weight: bold; font-size: 16px">Nomes Populares</span></p>
	    <p><?php echo $data['popular'][0]?></p>
        <p><span style="font-weight: bold; font-size: 16px">Família</span></p>
        <p><?php echo $data['familia'][0]?></p>
        
        <?php
			$arrlength=count($data);

			for($i=0;$i<$arrlength;$i++)
 			{
 			 echo "<p><span style='font-weight: bold; font-size: 16px'>Revistas para referência:</span></p>"
 			 echo "<p>Numero: " echo $data['nrevista'][$i] echo " Título do artigo: " echo $data['tituloArtigo'][$i];
 			 echo " Autores: " echo $data['autores'][$i] echo "</p>"
 			 echo "<p>Revista: " echo $data['revista'][$i] echo " Ano: " echo $data['ano'][$i]
 			 echo " Volume: " echo $data['volume'][$i] echo " Páginas: " echo $data['pagini'][$i]
 			 echo "-" echo $data['pagend'][$i] echo "</p>"

 			 echo "<p><span style='font-weight: bold; font-size: 16px'>Informações sobre colheitas:</span></p>"
 			 echo "<p> Classificador: " echo $data['classificador'][$i] echo " Local da colheita: " echo $data['localcolheita'][$i] echo "</p>"
 			 echo "<p> Floração: " echo $data['floracao'][$i] echo " Período de colheita: " echo $data['peridocolheita'][$i] echo "</p>"
 			 echo "<p> Equipamentos Usados: " echo $data['equipusados'][$i] echo " Tempo de Colheita: " echo $data['tempocolheita'][$i] echo "</p>"
 			 echo "<p> Tempo de Secagem dos frutos: " echo $data['tsecagemfrutos'][$i] echo " Condições de secagem: " echo $data['consecagem'][$i] echo "</p>"
 			 echo "<p> Metodo de Extração das Sementes: " echo $data['metodoextracaosementes'][$i] echo " Metodo de quebra de dormencia: " echo $data['colquebradorm'][$i] echo "</p>"
 			 echo "<p> Tempo de Beneficiamento: " echo $data['tempobenef'][$i] echo " Armazenamento: " echo $data['armazenamento'][$i] echo "</p>"
 			 echo "<p> Substrato utilizado: " echo $data['colsubstrato'][$i] echo " Temperatura utilizada: " echo $data['coltemperatura'][$i] echo "</p>"
 			 echo "<p> Fotoperíodo: " echo $data['fotoperiodo'][$i] echo " Tratamentos: " echo $data['tratamentos'][$i] echo "</p>"
 			 echo "<p> Melhor Germinação: " echo $data['melhorgerm'][$i] echo " Testes Realizados: " echo $data['testesrealiz'][$i] echo "</p>"
 			 echo "<p> Metodologia: " echo $data['metodologia'][$i] echo " Recomendações: " echo $data['recomendacoes'][$i] echo "</p>"
 			 echo "<p> Observações: " echo $data['observacoes'][$i] echo "</p>"
 			 echo "<p> Fontes: " echo $data['colfontes'][$i]
 			}
		?>
		


        
        <p><br /></p>
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div>
    </div>
<?php include 'modules/footer.php'; ?>
</div>


</body></html>