<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
    <meta charset="utf-8">
    <title>Sementes e Viveiros - Cadastro</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href=<?php echo base_url()."assets/style.css"?> media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href=<?php echo base_url()."assets/style.responsive.css"?> media="all">

    <script src=<?php echo base_url()."assets/jquery.js";?>></script>
    <script src=<?php echo base_url()."assets/script.js"?>></script>
    <script src=<?php echo base_url()."assets/script.responsive.js"?>></script>

    <script type="text/javascript" >

    $(document).ready(function(){
                //Preenche os campos na a&#231;&#227;o "Blur" (mudar de campo)
                $("#cep").blur(function(){
                $("#rua").val("...")
                $("#bairro").val("...")
                $("#cidade").val("...")
                $("#uf").val("...")
        
            // seta a variavel requisitada no campo cep
        consulta = $("#cep").val()
                
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
                        $("#rua").val(rua)
                        $("#bairro").val(bairro)
                        $("#cidade").val(cidade)
                        $("#uf").val(uf)
        
                        });
                });
        });

</script>



<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<nav class="art-nav clearfix">
    <ul class="art-hmenu">
        <li><a href=<?php echo base_url()."home";?> class="active" >Home</a></li>
        <li><a href=<?php echo base_url()."sobre"?>               >Sobre</a></li>
        <li><a href=<?php echo base_url()."contato"?>              >Contato</a></li>
</nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <h2 class="art-postheader">Cadastro de Usuário</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p><span style="font-weight: bold;">
        
        <br><br><br><br>
        <form>
            <p><label>Nome:</label><input style="padding-left: 10%;" type="text" name="nome" size="40"></p>
            <p><label>Email:</label><input type="text" name="email" size="40"></p>

            <p><label>Sexo:</label><input type="radio" name="sexo" value="masculino">Masculino<input type="radio" name="sex" value="feminino">Feminino</p>

            <p><label>CEP:</label><input name="cep" type="text" id="cep" value="" size="15" maxlength="8" /> (*Sem traço)</p>
            <p><label>Endereço:</label><input name="rua" type="text" id="rua" size="60" /></p>
            <p><label>Bairro:</label><input name="bairro" type="text" id="bairro" size="60" /></p>
            <p><label>Cidade:</label><input name="cidade" type="text" id="cidade" size="40" />Estado:<input name="uf" type="text" id="uf" size="2" /></p>

        </form>        
        
    </div>
    </div>
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