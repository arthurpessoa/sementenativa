<div class="powerMenu">
<?php
	if($this->session->userdata('logged')){
		echo "<p><h3>Olá ".$this->session->userdata('nome')."</h></p>";
		echo "<p><h3>Olá ".$this->session->userdata('cpfcnpj')."</h></p>";		
		
		echo "<p><a href=".base_url()."perfil>Perfil</a><a style=\"margin-left: 8px;\" href=".base_url()."login/logout>Sair</a></p>";
	}else{
		redirect(base_url()."login",'refresh');
	}
?>
</div>
