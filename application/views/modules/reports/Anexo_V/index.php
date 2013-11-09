<html>
<head>
	<meta charset="utf-8" />
    <title>Anexo V</title>
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
		$cpfcnpj = $this->session->userdata('cpfcnpj');
		$endereco = $this->session->userdata('endereco');
		$CEP = $this->session->userdata('CEP');
		$municipio = $this->session->userdata('municipio');
		$UF = $this->session->userdata('UF');
		$email = $this->session->userdata('email');
		$telefone= $this->session->userdata('telefone');
		$numero =  $this->session->userdata('numero');
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


		<h4 style="text-align: center;"> Anexo V </h4>
		<h3 style="text-align: center;">REQUERIMENTO PARA CREDENCIAMENTO COMO COLETOR DE SEMENTES DE ESPÉCIES FLORESTAIS</h3>
		<div style="text-align: center;">

			Sr. Superintendente Federal de Agricultura no Estado _________ <br>
			<br><br><br>
			O abaixo assinado requer o ( ) credenciamento / a ( ) renovação do credenciamento no Registro 
			<br>Nacional de Sementes e Mudas – RENASEM como COLETOR DE SEMENTES DE ESPÉCIES 
			<br>FLORESTAIS. 
			<br><br>
			E, para tanto, apresenta os seguintes dados, informações e documentação anexa: <br><br>
		</div>
		<table>
		    <tbody>
		    <tr>
		        <td style="width: 65%">Nome: <?php echo $nome; ?> </td>
		        <td>CPF / CNPJ: <?php echo $cpfcnpj; ?> </td>
		    </tr>
		    <tr>
		         <td colspan="2">Endereço: <?php echo $endereco.', Número '. $numero; ?> </td>
		    </tr>
		    </tbody>
		</table>

		<table>
			<tr>
		        <td style="width: 55%">CEP: <?php echo $CEP; ?></td>
		        <td>Município/UF: <?php echo $municipio.'/'.$UF; ?></td>
		    </tr>
		    <tr>
		        <td>Endereço Eletrônico: <?php echo $email ;?></td>
		        <td>Telefone: <?php echo $telefone; ?></td>
		    </tr>
		 </table>
		 <br><br><br>
		 Documentos para o credenciamento: <br>
		I - cópia do CPF/CNPJ; e 	<br>
		II - declaração de adimplência junto ao MAPA. 
				 <br><br><br>

		Nestes termos, pede deferimento. 
		<div style="text-align: center;">
			________________________ de ____________________ de ___________ <br>
 		<br>
			________________________________________________________ <br>
			Identificação e assinatura do requerente ou representante legal 

		</div>

		<table border=0>
	<div id="brand" style="margin:0 auto; width:94px; padding:5px; clear: both;">	</div>
	</div>
</body>
</html>