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
					<article class="art-post art-article" style="width: 100%">
						<h2 class="art-postheader">Cadastro de Usuário</h2>
						<p>
							<br>
							<span id="erroPagina" class="erroinsert"><?php echo $erro ?></span>
						</p>
						<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-0" style="width: 130%" >
											<form method="post" action=<?php echo base_url()."cadastrarUsuario/checkCadastro" ?>>
											<p>
												<label for="boxnome">Nome*</label>
												<input id="boxnome" type="text" name="nome" size="40"/>
												<span  hidden id="erroNomeVazio" class="erroinsert">*Não deve ser vazio</span>
												<span  hidden id="erroNomeNumero" class="erroinsert">*Nome não deve conter números</span>
												<span  hidden id="erroNomeGrande" class="erroinsert">*Nome deve conter no máximo 40 letras</span>
											
											</p>
											<p>
												<label for="boxemail">Email*</label>
												<input id="boxemail" type="text" name="email" size="40"/>
												<span hidden id="erroEmail" class="erroinsert">*e-mail inválido</span>
											</p>
											<p>
												<label for="boxfone">Telefone*</label>
												<input id="boxfone" type="text" name="telefone" size="40"/>
												<span hidden id="erroTelefone" class="erroinsert">*Telefone inválido</span>
											</p>
											<p>
												<label for="boxrenasem">Número RENASEM</label>
												<input id="boxrenasem" type="text" name="renasem" size="40"/>
												<span id="errorenasem" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxcpfcnpj">CPF/CNPJ</label>
												<input id="boxcpfcnpj" type="text" name="cpfcnpj" size="40"/>
												<span id="errocpfcnpj" class="erroinsert"></span>
											</p>
											<p>
												<label for="boxcep">CEP</label>
												<input name="cep" type="text" id="boxcep" value="" size="8" maxlength="8"/> (Sem traço)
												<span hidden id="erroCepForma" class="erroinsert">*CEP não deve conter "-"</span>
												<span hidden id="erroCepTamanho" class="erroinsert">*CEP deve conter 8 numeros</span>
											</p>
											<p>
												<label for="boxend">Endereço</label>
												<input id="boxend" name="endereco" type="text" size="40" />
												<span hidden id="erroEnd" class="erroinsert">*Endereço não pode ser vazio</span>
											</p>
											<p>
												<label for="boxnum">Número</label>
												<input id="boxnum" name="num" type="text" size="5"/>
												<span hidden id="erroNumVazio" class="erroinsert">*Numero não pode ser vazio</span>
												<span hidden id="erroNumLetras" class="erroinsert">*Numero não pode conter letras</span>
											</p>
											<p>
												<label for="boxbairro">Bairro</label>
												<input id="boxbairro" name="bairro" type="text" id="bairro" size="30" />
												<span hidden id="erroBairro" class="erroinsert">*Bairro não pode ser vazio</span>
											</p>
											<p>
												<label for="boxcidade">Cidade</label>
												<input id="boxcidade" name="cidade" type="text" size="40" />
												<span hidden id="erroCidade" class="erroinsert">*Cidade não pode ser vazio</span>
											</p>
											<p>
												<label for="boxuf">Estado</label>
												<input id="boxuf" name="uf" type="text" size="2" />
												<span hidden id="erroUF" class="erroinsert">*Estado não pode ser vazio</span>
											</p>
											<p>
												<label for="boxsenha">Senha</label>
												<input id="boxsenha" name="senha" type="password" size="12" />
												<span hidden id="erroSenha" class="erroinsert">*Senha não pode ser vazia</span>
											</p>
											<p>
												<label for="boxconfirmasenha">Confirmar Senha</label>
												<input id="boxconfirmasenha" name="confirmasenha" type="password" size="12" />
												<span hidden id="erroConfirmaSenha" class="erroinsert">*Confirmação diferente da senha digitada</span>
											</p>
											<p>
												<label for="Usr">Tipo de Usuário</label>
												<input type="radio" name="tipoUsr" value="Tecnico"/ checked> Tecnico
												<input type="radio" name="tipoUsr" value="Produtor"/> Produtor
											</p>
											<br><br>
											<p>
												<div style="position:relative;float:right;margin-right:7cm;">
												<a id="EnviarCadastro" href="#" onclick=""  class="art-button" >Cadastrar</a>
												</div>
												<div style="position:relative;float:right;margin-right:0.5cm;">
												<a id="Voltar" href=<?php echo base_url()."login";?> onclick="" class="art-button" >Voltar</a>
											    </div>
												
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
            var nomevalido=/^[a-zA-Z][^0-9]+$/;
            var emailValido=/^.+@.+\..{2,}$/;
 			var cep_errado = /^[0-9]{5}-[0-9]{2}$/;
 			var num = /^[0-9]+$/;
 			if(nome.length <= 0)
            {
                erro=1;
                $("#erroNomeVazio").show() 
            }
            else{
            	$("#erroNomeVazio").hide()
            	
            if(nome.length > 40)
            {
				erro =1;   	
                $("#erroNomeGrande").show()
            }
            else{
            	$("#erroNomeGrande").hide()
            
            if(!nomevalido.test(nome)){
                $("#erroNomeNumero").show() 
            	erro=1;
            }
            else{
            	$("#erroNomeNumero").hide() 
            }}}

            if(!emailValido.test(email))
            {

                $("#erroEmail").show() 
                erro=1;
            
            }else{
            	$("#erroEmail").hide() 
			}
            if(cep_errado.test(cep))
            {
                $("#erroCepForma").show() 
                erro=1;
            }
            else{
            	$("#erroCepForma").hide() 
            if(cep.length<7){
				$("#erroCepTamanho").show() 
				erro=1;
            }
            else{
            	$("#erroCepTamanho").hide() 
            }}

            if(endereco.length <= 0){
            	$("#erroEnd").show()
            	erro=1;
            }
            else{
            	$("#erroEnd").hide()
            }
            if(bairro.length <= 0){
            	$("#erroBairro").show()
            	erro=1;
            }
            else{
            	$("#erroBairro").hide()
            }
            if(cidade.length <= 0){
            	$("#erroCidade").show()
            	erro=1;
            }
            else{
            	$("#erroCidade").hide()
            }
            if(uf.length <= 0){
            	$("#erroUF").show()
            	erro=1;
            }
            else{
            	$("#erroUF").hide()
            }
            if(num.lenght <= 0){
            	$("#erroNumVazio").show()
            	erro=1;
            }
            else{
            	$("#erroNumVazio").hide()
            if(!num.test(numero)){
            	$("#erroNumLetras").show()
            	erro=1;
            }
            else{
            	$("#erroNumLetras").hide()
            }}
            if(senha.length <= 0){
            	$("#erroSenha").show()
            	erro=1;
            }
            else{
            	$("#erroSenha").hide()

            if(senha!=conf_senha){
            	$("#erroConfirmaSenha").show()
            	erro=1;
            }else{
            $("#erroConfirmaSenha").hide()
        }}

          
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