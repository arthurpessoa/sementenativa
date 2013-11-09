<html>
<head>
	<meta charset="utf-8" />
    <title>Anexo XIII</title>
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
		$cpfcnpj = $this->session->userdata('cpfcnpj');
		$endereco = $this->session->userdata('endereco');
		$numero = $this->session->userdata('numero');
		$municipio = $this->session->userdata('municipio');
		$CEP = $this->session->userdata('CEP');
		$UF = $this->session->userdata('UF');
		$telefone = $this->session->userdata('telefone');
		$email = $this->session->userdata('email');
		$ano = "2013";

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


		<h4 style="text-align: center;"> Anexo XIII </h4>
		<h3 style="text-align: center;">DECLARAÇÃO DE PRODUÇÃO DE SEMENTES E MUDAS DE ESPÉCIES FLORESTAIS PARA USO PRÓPRIO</h3>


		<div style="text-align: center;">
		Ano: <?php echo $ano ?><br>

		Nome do usuário: <?php echo $nome ?> CNPJ/CPF: <?php echo $cpfcnpj; ?> <br>
		Endereço: <?php echo $endereco. ', Numero '. $numero ?><br>
		Município/UF: <?php echo $municipio.'/'.$UF ?> CEP: <?php echo $CEP ?><br>
		Telefone: <?php echo $telefone ?> Endereço eletrônico: <?php echo $email ?> <br>
		<br><br><br>
		PROPRIEDADE
		<br>

		Nome: ______________________________________________ Município/UF: _____________<br>
		<br>Roteiro detalhado de acesso: _______________________________________________<br>
		<br><br><br>
		</div>

	<div id="brand" style="margin:0 auto; width:94px; padding:5px; clear: both;">
	</div>	
	</div>
</body>
</html>