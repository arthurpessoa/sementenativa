<div class="powerMenu">
<?php
	if($this->session->userdata('logged')){
		echo "<table style='border: 2px #bbb solid;'>";
		echo "<tr><td><p><h3>Olá ".$this->session->userdata('nome')."</h></p></td></tr>";		
		echo "<tr><td><p><a href=".base_url()."perfil>Perfil</a><a style=\"margin-left: 8px;\" href=".base_url()."login/logout>Sair</a></p></td></tr>";
		echo "</table>";
	}else{
		redirect(base_url()."login",'refresh');
	}
?>
</div>
