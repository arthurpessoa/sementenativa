<!DOCTYPE html>
<?php session_start(); ?>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
	<meta charset="utf-8">
	<title>Sementes e Viveiros</title>
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

<div class="clearfix">
	<div class="art-layout-wrapper clearfix">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
				<div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
						<h2 class="art-postheader" style="color:#6DAF28;font-size:35px;"><b>Espécie</b></h2>
												
				<div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
	<div class="art-content-layout-row">
	<div class="art-layout-cell layout-item-0" style="width: 100%" >
		
		<div style="background:white;border-style:solid;border-width:0 3px 3px 3px;width:140%;border-color:#6DAF28;">
		<div class="Efeito"> 
			<p><span style="font-weight: bold; font-size: 15px;margin-left:15px;">Nome Científico</span></p>
		</div>
			<p style="font-size:15px;margin-left:15px;font-weight: bold; "><?php echo $cientifico[0]?></p>
	   		
		<div class="Efeito"> 
		<p><span style="font-weight: bold; font-size: 15px;margin-left:15px;">Nomes Populares</span></p>
	    </div>
	    <p style="font-size:15px;margin-left:15px;font-weight: bold;"><?php
				$tam = count($popular[0]);
				for($i = 0; $i < $tam -1; $i++)
				{
					echo $popular[0][$i].", ";
				}
				echo $popular[0][$tam-1];
			?>
		</p>
		<div class="Efeito"> 
        	<p><span style="font-weight: bold; font-size: 16px">Família</span></p>
        </div>
        <p style="font-size:15px;margin-left:15px;font-weight: bold;"><?php echo $familia[0]?></p>
    
    </div>
		<h2 class="art-postheader" style="color:#6DAF28;font-size:35px;padding-top:10px;padding-bottom:10px;">Análise de Germinação</h2>
		
		<style type="text/css">
		.tg-table-green { border-collapse: collapse; border-spacing: 0; }
		.tg-table-green td, .tg-table-green th { background-color: #fff; border: 1px #bbb solid; color: #594F4F; font-family: sans-serif; font-size: 110%; padding: 11px; vertical-align: top; }
		.tg-table-green .tg-even td  { background-color: #EFFAB4; }
		.tg-table-green th  { background-color: #6DAF28; color: #FFFFFF; font-size: 120%; font-weight: bold; }
		/*.tg-table-green tr:hover td, .tg-table-green tr.even:hover td  { color: #333; background-color: #E5FCC2; }*/
		.tg-bf { font-weight: bold; } .tg-it { font-style: italic; }
		.tg-left { text-align: left; } .tg-right { text-align: right; } .tg-center { text-align: center; }
		</style>
		<table class="tg-table-green ">
		  <tr>
			<th>Temperatura</th>
			<th>Substrato</th>
			<th>Descrição da semente</th>
			<th>Número de sementes por Repetição</th>
			<th>Número de Repetições</th>
			
		  </tr>
		  <tr class="tg-even">
		  <?php 
		  	
			for($i = 0; $i < $espGe; $i++)
			{
				echo "<tr>";
				echo "<td>".$gertemperatura[$i]."</td>";
				echo "<td>".$gersubstrato[$i]."</td>";
				echo "<td>".$descricaosem[$i]."</td>";
				echo "<td>".$semporrep[$i]."</td>";
				echo "<td>".$repet[$i]."</td>";
				
				echo "</tr>";
			}
		  ?>
		  </tr>
		  <tr>
		  	<th>Quebra de Dormencia</th>
			<th>Tipo de Luz</th>
			<th>Umidade do Substrato</th>
			<th>Teste de Germinação</th>
			<th>Fontes</th>
		  </tr>
		  <tr class="tg-even">
		  <?php 
		  	
			for($i = 0; $i < $espGe; $i++)
			{
				echo "<tr>";
				echo "<td>".$gerquebradorm[$i]."</td>";
				echo "<td>".$tipoluz[$i]."</td>";
				echo "<td>".$umidadesubs[$i]."</td>";
				echo "<td>".$testeger[$i]."</td>";
				echo "<td>".$gerfontes[$i]."</td>";
				echo "</tr>";
			}
		  ?>
		  </tr>
		</table>
			<h2 class="art-postheader" style="color:#6DAF28;font-size:35px;padding-top:10px;padding-bottom:10px;">Colheita e Manejo</h2>
		<table class="tg-table-green">
		  <tr>
		
			<th>Local de colheita</th>
			<th>Floração</th>
			<th>Método de colheita</th>
			<th>Condições de secagem</th>
			<th>Método de extração das sementes</th>
		  </tr>
		  <tr class="tg-even">
		  <?php 
			for($i = 0; $i < $espCo; $i++)
			{
				echo "<tr>";
				echo "<td>".$localcolheita[$i]."</td>";
				echo "<td>".$floracao[$i]."</td>";
				echo "<td>".$metodocolheita[$i]."</td>";
				echo "<td>".$condsecagem[$i]."</td>";
				echo "<td>".$metodoextracaosementes[$i]."</td>";
				echo "</tr>";
			}
		  ?>
		  </tr>
		   <tr>
			<th>Tratamento para quebra de dormência</th>
			<th>Tratamentos realizados</th>
			<th>Testes Realizados</th>
			<th>Metodologia</th>
			<th>Fontes</th>
		  </tr>
		  <tr class="tg-even">
		  <?php 
			for($i = 0; $i < $espCo; $i++)
			{
				echo "<tr>";
				echo "<td>".$colquebradorm[$i]."</td>";
				echo "<td>".$tratamentos[$i]."</td>";
				echo "<td>".$testesrealiz[$i]."</td>";
				echo "<td>".$metodologia[$i]."</td>";
				echo "<td>".$colfontes[$i]."</td>";
				echo "</tr>";
			}
		  ?>
		  </tr>
		</table>
		<h2 class="art-postheader" style="color:#6DAF28;font-size:35px;padding-top:10px;padding-bottom:10px;">Caracterização</h2>
		<table class="tg-table-green">
		  <tr>
			<th>Data de Colheita</th>
			<th>Local de origem das sementes</th>
			<th>Indicador de Maturação</th>
			<th>Dispersão</th>
			<th>Número de sementes por fruto</th>
		  </tr>
		  <tr class="tg-even">
		  <?php 
		  	
			for($i = 0; $i < $espCa; $i++)
			{
				echo "<tr>";
				echo "<td>".$datacol[$i]."</td>";
				echo "<td>".$locorigem[$i]."</td>";
				echo "<td>".$indicmatur[$i]."</td>";
				echo "<td>".$dispers[$i]."</td>";
				echo "<td>".$semsfruto[$i]."</td>";
				echo "</tr>";
			}
		  ?>
		  </tr>
		  <tr>
			<th>Número de sementes por kilo</th>
			<th>Tamanho da semente</th>
			<th>Tamanho do fruto</th>
			<th>Observações</th>
			<th>Fontes</th>
			
		  </tr>
		  <tr class="tg-even">
		  <?php 
		  	
			for($i = 0; $i < $espCa; $i++)
			{
				echo "<tr>";
				echo "<td>".$semskilo[$i]."</td>";
				echo "<td>".$tamsemente[$i]."</td>";
				echo "<td>".$tamfruto[$i]."</td>";
				echo "<td>".$tipofruto[$i]."</td>";
				echo "<td>".$carfontes[$i]."</td>";
				echo "</tr>";
			}
		  ?>
		  </tr>
		</table>
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