<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		#visual {display: none;}
	</style>
</head>
<body>
	<div id="visual">
	<?php

		$hoje_tmp = getdate();
	    $hoje = ($hoje_tmp[hours].":".$hoje_tmp[minutes].":".$hoje_tmp[seconds]);
	      
	    $nome = $_POST["nome"]; //trata a variável nome
	    $email = $_POST["email"]; //trata a variável e-mail
	    $telefone = $_POST["telefone"]; //trata a variável telefone
	    $assunto = $_POST["assunto"]; //trata a variável assunto
	    $mensagem = $_POST["mensagem"]; //trata a variável mensagem
	      
	    global $email; //transforma em variavel global a variável e-mail
	      
	    $enviou = mail("martorres.tec@gmail.com", // aqui voce coloca o seu e-mail
	    "$assunto", // Assunto da mensagem
	    "Nome: $nome
	    Telefone: $telefone
	    Assunto: $assunto
	    E-mail: $email
	    Mensagem: $mensagem",
	    "From: $email $nome");
	      
	    if ($enviou){
	    	echo "<script>alert('Enviado com Sucesso, em breve responderemos.');window.location='/2012';</script>";
	    }
	      
	    else {
	    	echo "<script>alert('Não foi possivel enviar, tente novamente');window.location='/2012';</script>";
	    }
	?>
	</div>
</body>
</html>
