<div class="powerMenu">
<?php
	if($this->session->userdata('logged')){
		echo "<p><h3>Olá ".$this->session->userdata('nome')."</h></p>";
		echo "<form id=\"hid\" method=\"post\" action=\"Perfil\"><input type=\"hidden\" name=\"key\" value=\"".$this->session->userdata('email')."\"><button type=\"submit\">Meu perfil</button></form>";
		echo "<p><a href=".base_url()."login/logout>Sair</a></p>";
	}else{
		redirect(base_url()."login",'refresh');
	}
?>
</div>
