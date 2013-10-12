<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
	<meta charset="utf-8">
	<title>Sementes e Viveiros - Cadastro</title>
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
						<h2 class="art-postheader">Cadastro de Usuário</h2>
						<p>
							<br>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 100%" >
											<form method="post" action=<?php echo base_url()."cadastrarUsuario/checkCadastro" ?>>
											<p>
												<label for="boxnome">Nome*</label>
												<input id="boxnome" type="text" name="nome" size="40"/>
												<span id="erroNome" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxemail">Email*</label>
												<input id="boxemail" type="text" name="email" size="40"/>
												<span id="erroEmail" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxsexo">Sexo</label>
												<input id="sexo" type="radio" name="sexo" value="m" checked/>Masculino
												<input id="sexo" type="radio" name="sexo" value="f"/>Feminino
												<span id="erroSexo" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxcep">CEP</label>
												<input name="cep" type="text" id="boxcep" value="" size="8" maxlength="8"/> (Sem traço)
												<span id="erroCep" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxend">Endereço</label>
												<input id="boxend" name="endereco" type="text" size="40" />
												<span id="erroEnd" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxnum">Número</label>
												<input id="boxnum" name="num" type="text" size="5"/>
												<span id="erroNum" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxbairro">Bairro</label>
												<input id="boxbairro" name="bairro" type="text" id="bairro" size="30" />
												<span id="erroBairro" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxcidade">Cidade</label>
												<input id="boxcidade" name="cidade" type="text" size="40" />
												<span id="erroCidade" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxuf">Estado</label>
												<input id="boxuf" name="uf" type="text" size="2" />
												<span id="erroUF" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxsenha">Senha</label>
												<input id="boxsenha" name="senha" type="password" size="12" />
												<span id="erroSenha" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxconfirmasenha">Confirmar Senha</label>
												<input id="boxconfirmasenha" name="confirmasenha" type="password" size="12" />
												<span id="erroConfirmaSenha" class="erroinsert"></span>
											</p>
											<br><br>
											<p>
												<p><a id="EnviarCadastro" href="#" style="float: right;" onclick="" class="art-button" >Cadastrar</a></p>
											</p>
										</form>		
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
</div>
<script>
$(document).ready(function(){
	//Preenche os campos na a&#231;&#227;o "Blur" (mudar de campo)
	$("#boxcep").blur(function(){
		$("#boxend").val("...")
		$("#boxbairro").val("...")
		$("#boxcidade").val("...")
		$("#boxuf").val("...")
			
		// seta a variavel requisitada no campo cep
		consulta = $("#boxcep").val()
					
		//Realiza a consulta
		/*Realiza a consulta atrav&#233;s do toolsweb passando o cep como parametro
		 e informando que vamos consultar no tipo javascript
		*/
		$.getScript("http://www.toolsweb.com.br/webservice/clienteWebService.php?cep="+consulta+"&formato=javascript", function(){
			//unescape - Decodifica uma string codificada com o m&#233;todo escape.
			rua=unescape(resultadoCEP.logradouro)
			bairro=unescape(resultadoCEP.bairro)
			cidade=unescape(resultadoCEP.cidade)
			uf=unescape(resultadoCEP.estado)
							
			// preenche os campos
			$("#boxend").val(rua)
			$("#boxbairro").val(bairro)
			$("#boxcidade").val(cidade)
			$("#boxuf").val(uf)
		});
	});
});

</script>
<script src="js\jquery-1.6.2.min.js"></script>
    <script type="text/javascript">
           $(document).ready(function(){
           $('#EnviarCadastro').click(function(){
            // captura email
            var email = $("#boxemail").val();
            var nome = $("#boxnome").val();
            var cep = $("#boxcep").val();
            var endereco = $("#boxend").val();
            var bairro = $("#boxbairro").val();
            var cidade = $("#boxcidade").val();
            var uf = $("#boxuf").val();
            var senha = $("#boxsenha").val();
            var conf_senha = $("#boxconfirmasenha").val();
            var numero = $("#boxnum").val();
            var erro=0;

            // expressão regular
            var nomevalido=/^[a-z][^0-9]+$/;
            var emailValido=/^.+@.+\..{2,}$/;
 			var cep_errado = /^[0-9]{5}-[0-9]{2}$/;
 			var num = /^[0-9]+$/;
 			if(nome.length <= 0)
            {
                alert('Nome não pode ser vazio');
                erro=1;
            }
            else{
            if(nome.length > 40)
            {
                alert('Nome pode conter no máximo 40 caracteres');
				erro =1;               
            }
            else{
            if(!nomevalido.test(nome)){
            	alert('Nome não deve conter numeros');
            	erro=1;
            }
            else{
            if(!emailValido.test(email))
            {
                alert('Email inválido!');
                erro=1;
            }
            else{
            if(cep_errado.test(cep))
            {
                alert('CEP não deve conter "-" ');
                erro=1;
            }
            else{
            if(cep.length<8){
				alert('CEP deve conter 8 caracteres');
				erro=1;
            }
            else{
            if(endereco.length <= 0){
            	alert('Endereço não pode ser vazio');
            	erro=1;
            }
            else{
            if(bairro.length <= 0){
            	alert('Bairro não pode ser vazio');
            	erro=1;
            }
            else{
            if(cidade.length <= 0){
            	alert('Cidade não pode ser vazio');
            	erro=1;
            }
            else{
            if(uf.length <= 0){
            	alert('Estado não pode ser vazio');
            	erro=1;
            }
            else{
            if(num.lenght <= 0){
            	alert('Campo numero não deve ser vazio');
            	erro=1;
            }
            else{
            if(!num.test(numero)){
            	alert('Numero não deve conter letras');
            	erro=1;
            }
            else{
            if(senha.length <= 0){
            	alert('Digite uma senha');
            	erro=1;
            }
            else{
            if(senha!=conf_senha){
            	alert('Senha de confirmação deve ser igual à senha digitada.');
            	erro=1;
            }


            //Fechamento das chaves dos else
        	}}}}}}}}}}}}}

        	if(erro==0){
        		$(this).closest('form').submit();
        	}else{
        		erro=0;
        	}

        });
    });
    </script>
</body>
</html>