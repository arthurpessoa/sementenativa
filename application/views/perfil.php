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
		   <li><a href=<?php echo base_url()."home";?>>Página Inicial</a></li>
        <li><a href=<?php echo base_url()."sobre"?>               >Sobre</a></li>
        <li><a href=<?php echo base_url()."contato"?>               >Contato</a></li>
	</ul>
</nav>
<nav class="art-nav clearfix" style="   background: #6DAF28;">
	<ul class="art-hmenu" style="height: 29px;">
		<li><a href=<?php echo base_url()."controlPanel";?> >Ferramentas</a></li>
		<li><a href=<?php echo base_url()."ajuda";?> class="active"  >Perfil</a></li>
		<li><a href=<?php echo base_url()."ajuda";?> >Ajuda</a></li>
	</ul>
</nav>

<div class="art-sheet clearfix">
			<div class="art-layout-wrapper clearfix">
				<div class="art-content-layout">
					<div class="art-content-layout-row">
						<div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
								<h2 class="art-postheader">Perfil</h2>
												
				<div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
	<div class="art-content-layout-row">
	<div class="art-layout-cell layout-item-0" style="width: 100%" >
		<p><span style="font-weight: bold; font-size: 25px;color:#6DAF28;">Nome</span></p>
		<p style="font-size:16px;"><?php echo $nome?></p>
		<p><span style="font-weight: bold; font-size: 25px;color:#6DAF28;">Tipo de Usuário</span></p>
	    <p style="font-size:16px;">Produtor</p>
		<!--p><span style="font-weight: bold; font-size: 16px">Senha</span></p>
		<p>Batatinha</p-->
        <p><span style="font-weight: bold; font-size: 25px;color:#6DAF28;">E-mail para contato</span></p>
        <p style="font-size:16px;"><?php echo $email ?></p>
        <!--p><span style="font-weight: bold; font-size: 16px">Telefone</span></p>
        <p><?php echo $telefone ?></p></p-->
		<p><span style="font-weight: bold; font-size: 25px;color:#6DAF28;">Endereço</span></p>
        <p style="font-size:16px;"><?php echo $endereco.", ".$numero ?></p>
        <p style="font-size:16px;"><?php echo $bairro ?></p>
        <p style="font-size:16px;"><?php echo $cidade." - ".$estado ?></p>
        <p style="font-size:16px;">CEP: <?php echo $cep ?></p>
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