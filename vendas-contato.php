<?php
/* Configuração para o PHP.INI
 * ------------------------------ */
ini_set('display_errors', 1);
ini_set('default_charset','UTF-8');
date_default_timezone_set('America/Sao_Paulo');
/* POST
 * ------------------------------ */
if (isset($_POST["enviar"])) {
    require_once("class.phpmailer.php");
    $smtpUsuario = "noreply.expertinformatica@gmail.com";
    $smtpSenha = "novasenha5";
    $de_nome		= $_POST['nome'];
    $from		= $_POST['email'];
    $Fone		= $_POST["tel"];
    $subject		= "EXPERT VENDAS MERCADO LIVRE";
    $para		= "vendas@expertlanhouse.com.br";
    $Mensagem	= $_POST["Mensagem"];
    $corpo 		= ""
            . "$Mensagem\n\n"
            . "Att $de_nome,\n"
            . "$Fone";
    function smtpmailer($para, $from, $de_nome, $subject, $corpo) { 
            global $error, $smtpUsuario, $smtpSenha;
            $mail = new PHPMailer();
            $mail->IsSMTP();		// Ativar SMTP
            $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
            $mail->SMTPAuth = true;		// Autenticação ativada
            $mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
            $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
            $mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
            $mail->Username = $smtpUsuario;
            $mail->Password = $smtpSenha;
            $mail->SetFrom($from, $de_nome);
            $mail->Subject = $subject;
            $mail->Body = $corpo;
            $mail->AddAddress($para);
            if(!$mail->Send()) {
                    $error = '<div class="sent">Mail error: '.$mail->ErrorInfo.'</div>'; 
                    return false;
            } else {
                    $error = '<div style="font-weight:bold;color:red;float:left;">Enviado com sucesso!</div><div style="clear:both;"><hr/></div>';
                    return true;
            }
    }
    if (smtpmailer($para, $from, $de_nome, $subject, $corpo)) {
        //sent
    }
    if (!empty($error)) echo $error;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vendas - Expert Lan House e Vendas Mercado Livre, Cachoeira do Sul - RS">
    <meta name="author" content="André Silveira Machado">
    <meta name="keywords" content="expert lan house,lan house,vendas,mercado livre,cachoeira do sul,rio grande do sul,felipe trevisan,RS,expert,lan,house,vendas,mercado,livre,informática,Cachoeira,do,sul,felipe,trevisan,vender,computador,Notebook,counter-strike,1.6,jogos,internet,cyber,perfume,perfumes,produtos,vendedor,expertlanhouse,lanhouse,site,telefone,endereco,endereço,campenatos,campeonato,steam,half life,counter-strike 1.6,melhor,1,2,3,4,5,6,7,8,9,0">
    <meta name="robots" content="index, follow">
    <title>Expert Vendas Mercado Livre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/andremachado.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- 
    <link rel="shortcut icon" href="images/ico/favicon16.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/favicon144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/favicon114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/favicon72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/favicon.png">
	 -->
	<!-- Inicio da referencia ao ficheiro lightbox -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lightbox/css/lightbox.css">
	<script src="lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
	<!-- Fim da referencia ao ficheiro lightbox -->
	<script src="lytebox/lytebox.js" type="text/javascript"></script>
    <link href="lytebox/lytebox.css" rel="stylesheet">
</head><!--/head-->
<body>
    <header class="navbar navbar-fixed-top wet-asphalt" style="border-bottom:1px solid rgba(255,255,255,0.3);" role="banner">
        <div class="container">
            <div class="navbar-header">
                <a class="" href="index.php"><img style="margin-top:10px;float:left;" src="logo-vendas.png" height="30"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><strong>Página Inicial</strong></a></li>
                    <li><a href="vendas.html"><strong>Vendas Mercado Livre</strong></a></li>
                    <li ><a href="vendas-localizacao.html"><strong>Localização</strong></a></li>
                    <li class="active"><a href="#"><strong>Fale conosco</strong></a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <div style="display:none;">
		<h1>Expert Lan House e Vendas Mercado Livre, Cachoeira do Sul - RS</h1><br/>
		<h1>expertlanhouse, lanhouse, vendas, vendedor, perfumes, ml, cachoeira, rs, computadores, informática, felipe, trevisan, barato, preço, baixo, promoção, promocao, menor, valor, menor preco, preco, menor preço, site, endereco, endereço, telefone, produtos, mercado, livre, internet, cyber, perfumes, perfume, jogos, counter-strike 1.6, steam, half life, campeonatos, campeonato, cachoeira do sul, rio grande do sul, felipe trevisan, site</h1>
        <h2>Expert Lan House e Vendas Mercado Livre - Cachoeira do Sul - RS, Felipe Trevisan João</h2>
	</div>
    <section class="container no-margin" style="margin-top:-20px;width:100%;">
    	<div class="container">
    		<div style="width:800px;margin-left:0px;" class="fl">
	    		<fieldset>
	    			<legend class="formContatoLegend">Fale conosco</legend>
		    		<form action="" method="POST">
			    		<table style="margin-left:42px;" class="formContatoTable fl">
			    			<tr class="formContatoTr">
			    				<td style="width:15%;">Nome:</td>
			    				<td style="width:35%;text-align:left;"><input class="formContatoInput" type="text" name="nome"/></td>
			    				<td style="width:15%;">E-mail:</td>
			    				<td style="width:35%;text-align:left;"><input class="formContatoInput" type="email" name="email"/></td>
			    			</tr>
			    			<tr class="formContatoTr">
			    				<td colspan="2"></td>
			    				<td>Telefone:</td>
			    				<td style="text-align:left;"><input class="formContatoInput" type="tel" name="tel"/></td>
			    			</tr>
			    		</table>
			    		<br/>
			    		<table class="formContatoTable fl">
			    			<tr>
			    				<td><p style="margin-left:5px;">Mensagem:</p></td>
			    			</tr>
			    			<tr>
			    				<td><textarea name="Mensagem" style="margin-left:5px;background-color:rgba(0,0,0,0.1);color:green;padding:5px;border:0px;" maxlenght="255" rows="10" cols="100" required></textarea></td>    			
			    			</tr>
			    		</table>
			    		<div style="clear:both;height:10px;"></div>
			    		<button class="fl formButtonEnviar" name="enviar">Enviar</button>
		    		</form>
	    		</fieldset>
    		</div>
    		<div class="fr" style="margin-top:20px;margin-right:0px;">
    			<img src="images/gmail.png" alt="E-mail" width="100"/>
    		</div>
    	</div>
    </section>
    <footer id="footer" class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6"><p style="font-family:Arial;font-weight:normal;color:rgba(0,0,0,0.6);font-size:14px;">vendas@expertlanhouse.com.br</p></div><!--/.col-md-3-->
                <div class="col-md-3 col-sm-6"></div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-6"></div> <!--/.col-md-3-->
				<div class="col-md-3 col-sm-6" style="float:right;color:rgba(0,0,0,0.6);">
                    <h4 style="margin-top:0px;">Vendas Mercado Livre</h4>
                    <address>
                    	<h5><strong>Felipe Trevisan João</strong></h5>
                        Rua Ernesto Alves, 95<br>
                        Bairro Rio Branco<br>
                        Cachoeira do Sul, RS<br>
                        CEP 96506-331<br>
                        <abbr title="Telefone">Telefone:</abbr> (51) 3724-3886, (51) 3722-2607
						<abbr title="Celular">Celular:</abbr> (51) 9268-6869
                    </address>
                </div> <!--/.col-md-3-->
            </div>
            <div class="row" style="text-align:center;font-size:11px;font-family:arial;width:100%;color:rgba(0,0,0,0.5);">
                   <hr style="width:100%;"/> &copy; 2014 Expert Lan House, Cachoeira do Sul - RS
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script>
	  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  	ga('create', 'UA-53894951-1', 'auto');
	  	ga('send', 'pageview');
	</script>
</body>
</html>