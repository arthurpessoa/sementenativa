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
		<p><?php echo $cientifico[0]?></p>
		<p><span style="font-weight: bold; font-size: 16px">Nomes Populares</span></p>
	    <p><?php
				$tam = count($popular[0]);
				for($i = 0; $i < $tam -1; $i++)
				{
					echo $popular[0][$i].", ";
				}
				echo $popular[0][$tam-1];
			?>
		</p>
        <p><span style="font-weight: bold; font-size: 16px">Família</span></p>
        <p><?php echo $familia[0]?></p>
        
		<p><span style="font-weight: bold; font-size: 16px">Análise de Germinação</span></p>
		
		<style type="text/css">
		.tg-table-green { border-collapse: collapse; border-spacing: 0; }
		.tg-table-green td, .tg-table-green th { background-color: #fff; border: 1px #bbb solid; color: #594F4F; font-family: sans-serif; font-size: 100%; padding: 10px; vertical-align: top; }
		.tg-table-green .tg-even td  { background-color: #EFFAB4; }
		.tg-table-green th  { background-color: #9DE0AD; color: #594F4F; font-size: 110%; font-weight: bold; }
		.tg-table-green tr:hover td, .tg-table-green tr.even:hover td  { color: #333; background-color: #E5FCC2; }
		.tg-bf { font-weight: bold; } .tg-it { font-style: italic; }
		.tg-left { text-align: left; } .tg-right { text-align: right; } .tg-center { text-align: center; }
		</style>
		<table class="tg-table-green">
		  <tr>
			<th>Temperatura</th>
			<th>Substrato</th>
			<!--th>Descrição da Semente</th-->
			<!--th>Número de sementes por Kg</th-->
			<!--th>Peso de 1000 sementes</th-->
			<th>Número de sementes por Repetição</th>
			<th>Número de Repetições</th>
			<th>Quebra de Dormencia</th>
			<!--th>Tempo inicial de Germinação</th-->
			<!--th>Período de Teste</th-->
			<!--th>Tempo final de Germinação</th-->
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
				echo "<td>".$gertemperatura[$i]."</td>";
				echo "<td>".$gersubstrato[$i]."</td>";
				//echo "<td>".$descricaosem[$i]."</td>";
				//echo "<td>".$nsemkg[$i]."</td>";
				//echo "<td>".$gerpesosksem[$i]."</td>";
				echo "<td>".$semporrep[$i]."</td>";
				echo "<td>".$repet[$i]."</td>";
				echo "<td>".$gerquebradorm[$i]."</td>";
				//echo "<td>".$periodoteste[$i]."</td>";
				//echo "<td>".$tiniger[$i]."</td>";
				//echo "<td>".$ifimger[$i]."</td>";
				echo "<td>".$tipoluz[$i]."</td>";
				echo "<td>".$umidadesubs[$i]."</td>";
				echo "<td>".$testeger[$i]."</td>";
				echo "<td>".$gerfontes[$i]."</td>";
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