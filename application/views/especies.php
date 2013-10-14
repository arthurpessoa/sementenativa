<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Sementes e Viveiros - Buscar Espécies</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href=<?php echo base_url()."assets/style.css"?> media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href=<?php echo base_url()."assets/style.responsive.css"?> media="all">

	<link rel="stylesheet" type="text/css" href=<?php echo base_url()."assets/ja3.css"?>>

    <script src=<?php echo base_url()."assets/jquery.js";?>></script>
    <script src=<?php echo base_url()."assets/script.js";?>></script>
    <script src=<?php echo base_url()."assets/script.responsive.js";?>></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
  <nav class="art-nav clearfix">
	<ul class="art-hmenu">
		<li><a href=<?php echo base_url()."home";?> class="active" >Home</a></li>
		<!--li><a href=<?php echo base_url()."sobre"?> >Sobre</a></li-->
		<!--li><a href=<?php echo base_url()."contato"?> >Contato</a></li-->
		<li><a href=<?php echo base_url()."contato"?> >Buscar</a></li>
</nav>
<div class="art-sheet clearfix">
	<div class="art-layout-wrapper clearfix">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
				<div class="art-layout-cell art-content clearfix">
					<article class="art-post art-article">
						<h2 class="art-postheader">Banco de espécies</h2>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 130%" >
										<form method="post" action=<?php echo base_url()."especies/buscar" ?>>
										
										<h2>Buscar Espécies</h2>
									    <br><br>

									   Digite o nome da espécie (vulgar ou científico) ou parte dele, e clique em "Buscar", após isso clique na espécie desejada

										<p><input id="especie" type="text" name="especie" style="width: 70%;"/></p>
										<p><button type="submit" id="buscar" href="#" style="float: left;" onclick="" class="art-button" >Buscar</button></p>
										
										</form>
										
									</div>
								</div>
								<div style="float: left; padding-top: 10px;">
										<br><br><br><br>
										<?php
										if($result){
											echo "<h3>Resultados</h3>";
											$c = count($especies);
											for($i = 0; $i < $c; $i++)
											{
												if(i==20)break;
												echo '<p><a href="'.base_url().'visualizarEspecie?nome='.$especies[$i].'">'.$especies[$i]."</a></p>";
											}
										}
										?>
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


</body></html>