<div class="powerMenu">
<?php
	if($this->session->userdata('logged')){
		echo "<p>Olá ".$this->session->userdata('nome')."</p>";
		echo "<p><a href=".base_url()."login/logout>Sair</a></p>";
	}else{
		redirect(base_url()."login",'refresh');
	}
?>
</div>
