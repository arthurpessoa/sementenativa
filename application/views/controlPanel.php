<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
	<meta charset="utf-8">
	<title>Semente Nativa - Painel de Controle</title>
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

.art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-2 { color: #737373; background: #2F89B6; padding: 0px;  }
.art-content .art-postcontent-0 .layout-item-3 { color: #737373; background: #A04661; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-4 { color: #737373; background: #5B9121; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-5 { color: #737373; background: #EB9500; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-6 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-7 { background: ; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-8 { margin-top: 0px;margin-right: 10px;margin-bottom: 20px;margin-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-9 {  border-collapse: separate;  }
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
		<li><a href=<?php echo base_url()."controlPanel";?> class="active" >Painel de Controle</a></li>
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
						<h2 class="art-postheader">Painel de Controle</h2>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%">
									<?php
									if($admin=='1'){
										include 'modules/CP/ferramentasAdmin.php';
									}if($tecnico=='1'){
										include 'modules/CP/ferramentasTecnico.php';
									}if($produtor=='1'){
										include 'modules/CP/ferramentasProdutores.php';
									}
									?>
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
<script>
	$(document).ready(function() {
		$('#btnApagar').click(function(){
			var conf = confirm('Tem certeza que deseja apagar?');
			alert(conf);
		});
	});
</script>
</div>
</body>

</html>