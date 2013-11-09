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
				<div class="art-layout-cell art-content clearfix">
					<article class="art-post art-article">
							<div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >
										<p><span style="font-weight: bold; font-size: 25px"><?php echo $cientifico[0]?></span></p>
										<p><span style="font-weight: bold; font-size: 25px"><?php echo $familia[0]?></span></p>
										<br>
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
											<th>Descrição da Semente</th>
											<th>Número de sementes por Kg</th>
											<th>Peso de 1000 sementes</th>
											<th>Número de sementes por Repetição</th>
											<th>Número de Repetições</th>
											<th>Quebra de Dormencia</th>
											<th>Tempo inicial de Germinação</th>
											<th>Período de Teste</th>
											<th>Tempo final de Germinação</th>
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
												echo "<td>".$descricaosem[$i]."</td>";
												echo "<td>".$nsemkg[$i]."</td>";
												echo "<td>".$gerpesosksem[$i]."</td>";
												echo "<td>".$semporrep[$i]."</td>";
												echo "<td>".$repet[$i]."</td>";
												echo "<td>".$gerquebradorm[$i]."</td>";
												echo "<td>".$periodoteste[$i]."</td>";
												echo "<td>".$tiniger[$i]."</td>";
												echo "<td>".$ifimger[$i]."</td>";
												echo "<td>".$tipoluz[$i]."</td>";
												echo "<td>".$umidadesubs[$i]."</td>";
												echo "<td>".$testeger[$i]."</td>";
												echo "<td>".$gerfontes[$i]."</td>";
												echo "</tr>";
											}
				  						?>
				  						</tr>
									</table>
									<p><span style="font-weight: bold; font-size: 16px">Colheita e Manejo</span></p>
									<table class="tg-table-green">
									  <tr>
											<th>Número da revista</th>
											<th>Título do Artigo</th>
											<th>Autores</th>
											<th>Revista</th>
											<th>Ano</th>
											<th>Volume</th>
											<th>Paginação*</th>
											<th>Classificador</th>
											<th>Local de colheita</th>
											<th>Floração</th>
											<th>Período de colheita</th>
											<th>Método de colheita</th>
											<th>Equipamentos de colheita usados</th>
											<th>Tempo de colheita</th>
											<th>Tempo de secagem dos frutos</th>
											<th>Condições de secagem</th>
											<th>Método de extração das sementes</th>
											<th>Tratamento para quebra de dormência</th>
											<th>Tempo de beneficiamento</th>
											<th>Armazenamento Pós-colheita</th>
											<th>Substrato</th>
											<th>Temperatura</th>
											<th>Fotoperíodo</th>
											<th>Tratamentos realizados</th>
											<th>Melhor % de Germinação</th>
											<th>Testes Realizados</th>
											<th>Metodologia</th>
											<th>Recomendações</th>
											<th>Observações</th>
											<th>Fontes</th>
										</tr>
										<tr class="tg-even">
				  						<?php
											for($i = 0; $i < $espCo; $i++)
											{
												echo "<tr>";
												echo "<td>".$nrevista[$i]."</td>";
												echo "<td>".$tituloArtigo[$i]."</td>";
												echo "<td>".$autores[$i]."</td>";
												echo "<td>".$revista[$i]."</td>";
												echo "<td>".$ano[$i]."</td>";
												echo "<td>".$volume[$i]."</td>";
												echo "<td>".$pagini[$i].'-'.$pagend[$i]."</td>";
												echo "<td>".$classificador[$i]."</td>";
												echo "<td>".$localcolheita[$i]."</td>";
												echo "<td>".$floracao[$i]."</td>";
												echo "<td>".$periodocolheita[$i]."</td>";
												echo "<td>".$metodocolheita[$i]."</td>";
												echo "<td>".$equipusados[$i]."</td>";
												echo "<td>".$tempocolheita[$i]."</td>";
												echo "<td>".$tsecagemfrutos[$i]."</td>";
												echo "<td>".$condsecagem[$i]."</td>";
												echo "<td>".$metodoextracaosementes[$i]."</td>";
												echo "<td>".$colquebradorm[$i]."</td>";
												echo "<td>".$tempobenef[$i]."</td>";
												echo "<td>".$armazenamento[$i]."</td>";
												echo "<td>".$colsubstrato[$i]."</td>";
												echo "<td>".$fotoperiodo[$i]."</td>";
												echo "<td>".$coltemperatura[$i]."</td>";
												echo "<td>".$tratamentos[$i]."</td>";
												echo "<td>".$melhorgerm[$i]."</td>";
												echo "<td>".$metodologia[$i]."</td>";
												echo "<td>".$testesrealiz[$i]."</td>";
												echo "<td>".$recomendacoes[$i]."</td>";
												echo "<td>".$observacoes[$i]."</td>";
												echo "<td>".$colfontes[$i]."</td>";
												echo "</tr>";
											}
				  						?>
									  </tr>
									</table>
									<p><span style="font-weight: bold; font-size: 16px">Caracterização</span></p>
									<table class="tg-table-green">
				  					<tr>
										<th>Data de Colheita</th>
										<th>Local de origem das sementes</th>
										<th>Indicador de Maturação</th>
										<th>Dispersão</th>
										<th>Número de Frutos por kilo</th>
										<th>Peso de mil frutos</th>
										<th>Número de sementes por fruto</th>
										<th>Número de sementes por kilo</th>
										<th>Peso de mil sementes</th>
										<th>Relação Fruto : Semente</th>
										<th>Tamanho da semente</th>
										<th>Tamanho do fruto</th>
										<th>Tipo de Fruto</th>
										<th>Pureza</th>
										<th>Observações</th>
										<th>Fontes</th>
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
										echo "<td>".$frutoskg[$i]."</td>";
										echo "<td>".$pesokfrutos[$i]."</td>";
										echo "<td>".$semsfruto[$i]."</td>";
										echo "<td>".$semskilo[$i]."</td>";
										echo "<td>".$carpesoksem[$i]."</td>";
										echo "<td>".$relfrutsem[$i]."</td>";
										echo "<td>".$tamsemente[$i]."</td>";
										echo "<td>".$tamfruto[$i]."</td>";
										echo "<td>".$tipofruto[$i]."</td>";
										echo "<td>".$pureza[$i]."</td>";
										echo "<td>".$obs[$i]."</td>";
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
		</article>
	</div>
	</div>
	</div>
	</div>
</div>
<?php include 'modules/footer.php'; ?>
</div>


</body>
</html>