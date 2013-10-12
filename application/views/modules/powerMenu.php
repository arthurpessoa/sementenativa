<?php 
if( !isset($_SESSION['last_access']) || (time() - $_SESSION['last_access']) > 60 ) 
  $_SESSION['last_access'] = time(); 
?>
<div class="powerMenu">

	<?php
		if(isset($_POST['logout']) && $_POST['logout'] == True){
			session_destroy();
		}else if(isset($_SESSION['user'])){
			echo "<p><h3>Olá, ".$_SESSION['user']."</h3></p>
					<p><a href=\"./\">Sair</a></p>
					<p><a href=\"".base_url()."controlPanel\">Painel de Controle</a></p>
					<p><a href=\"".base_url()."adicionarEspecie\">Adicionar Espécie</a></p>
					<p><a href=\"".base_url()."adicionarCaracterizacao\">Adicionar Caracterização</a></p>
					<p><a href=\"".base_url()."adicionarColheitaEManejo\">Adicionar Colheita e Manejo</a></p>
					<p><a href=\"".base_url()."adicionarAnaliseDeGerminacao\">Adicionar Análise de Germinação</a></p>";
		}else if(isset($_POST['login']) && strlen($_POST['login']) > 0){
			$_SESSION['user'] = $_POST['login'];
			$_SESSION['admin'] = True;
			$_SESSION['produt'] = True;
			$_SESSION['pesq'] = True;
			//$_SESSION['logout'] = False;
			
			echo "<p><h3>Olá, ".$_SESSION['user']."</h3></p>
					<p><a method=\"post\" name=\"logout\" value=\"True\" href=\"".$_SERVER['PHP_SELF']."\">Sair</a></p>";
		}else{
			echo "<form method=\"post\" action=\"./\">";
			echo "	<p>";
			echo "<label for=\"boxlogin\">Login</label>";
			echo "	<input name=\"login\" type=\"text\" id=\"boxlogin\" size=\"15\"/>";
			echo "	<span id=\"erroLogin\" class=\"erroinsert\"></span>";
			echo "</p>";
			echo "<p>";
			echo "	<label for=\"boxSenha\">Senha</label>";
			echo "	<input name=\"senha\" type=\"text\" id=\"boxsenha\" size=\"15\"/>";
			echo "	<span id=\"erroSenha\" class=\"erroinsert\"></span>";
			echo "</p>";
			echo "<input class=\"btnenviar\" type=\"submit\" value=\"Login\">";
			echo "</form>";
		}
	?>
</div>
