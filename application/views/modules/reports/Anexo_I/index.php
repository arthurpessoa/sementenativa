<html>
<head>
	<meta charset="utf-8" />
    <title>Anexo I</title>
    <style type="text/css" media="print">
        @page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }

        body 
        {
            margin: 0px;  /* the margin on the content before printing */
       	}
    </style>
</head>
<body>
	<?php
		$nome = $this->session->userdata('nome');
		$RENASEM = $this->session->userdata('renasem');
		$anoProducao = "2013";

	?>

<style type="text/css">
	table{
		border-collapse:collapse;
		width: 100%;
	}
	td
	{
		border: 1px solid gray;
	}

</style>

	<!-- End embedded font definitions -->

	<!-- Begin text definitions (Positioned/styled in CSS) -->


	<div style=" width: 90%;  margin-left: 5%; margin-right: 5%; margin-top: 5%">


		<h4 style="text-align: center;"> Anexo I </h4>
		<h3 style="text-align: center;">RELATÓRIO ANUAL DE PRODUÇÃO E COMERCIALIZAÇÃO DE SEMENTES DE ESPÉCIES FLORESTAIS</h3>


		<table border=0>
		<tr>
			<td style="width: 65%;">Produtor: <?php echo $nome;?></td>
			<td>Inscrição no RENASEM nº: <?php echo $RENASEM; ?></td>
		</tr>
		</table>	
		<br>

		<table border=1>
		    <tbody>
		    <tr>
		        <td rowspan="3">Espécie</td>
		        <td rowspan="3">Nome Comum / Cultivar</td>
		        <td rowspan="3">Categoria</td>
		        <td rowspan="3">Fonte de Semente</td>
		        <td rowspan="3">Saldo do Ano Anterior (kg)</td>
		        <td colspan="6">Produção Acumulada no Ano (kg)</td>
		        <td rowspan="3">Saldo (kg)*</td>
		        <td rowspan="3">Previsão de Produção Para o Ano: <?php echo $anoProducao; ?></td>
		    </tr>
		    <tr>
		        <td rowspan="2">Produção</td>
		        <td colspan="3">Comercializada</td>
		        <td rowspan="2">Plantio Próprio</td>
		        <td rowspan="2">Outros Destinos</td>
		    </tr>
		    <tr>
		        <td>No Estado</td>
		        <td>Outros Estados</td>
		        <td>Exportado</td>
		    </tr>
		    <tr>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		        <td>dado</td>
		    </tr>
		    </tbody>
		</table>
		* Saldo de Sementes = saldo de sementes do ano anterior + produção do ano – (comercializada + plantio próprio + outros destinos)
		
		<br>
		<br>
		<table border=1 style="width: 35%">
			<tr>
				<td>Local e Data:</td>
			</tr>
		</table>

		<br>

		<table border=1 style="width: 60%; margin-left: 20%; margin-right:20%;">
			<tr>
				<td style="text-align: left;">Assinatura do Produtor:</td>
			</tr>
		</table>

	<br>
	<div id="brand" style="margin:0 auto; width:94px; padding:5px; clear: both;">
	</div>
</body>
</html>