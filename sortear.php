<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
<title>Sorteio de Alunos</title>
<style type="text/css">
* {font-family:"Trebuchet MS"; font-size:14px;}
#wrapper {width: 960px; height: auto; margin: 0 auto;}
h1 {font-family:"Trebuchet MS"; font-size:24px; color:#006; font-weight:bold; text-transform:uppercase; text-align:center;}
h2, h3 {font-family:"Trebuchet MS"; font-size:18px; color:#006; font-weight:bold; text-transform:uppercase;
	text-align: center; padding-bottom: 50px;}
h3 {padding-top: 50px; font-size: 28px; border: 1px solid #75A93B; background-color: #75A93B;}
#logo {width:100%; text-align: center;}
#btn_sortear {padding: 24px 50px 0; width: 150px; height: 50px; background-color: #006; border-radius: 10px; text-decoration: none; color: #fff; text-align: center; display: block; margin: 0 auto; text-transform: uppercase; font-size: 24px; font-weight: bold;}
#btn_sortear:hover {background-color: #611f22;}

</style>

</head>

<body>
<div id="wrapper">
	<h1>Sistema Sorteador</h1>
	<div id="logo"><img src="img/logo.png" alt="Logo FICAP"></div>
	<h2>FICAP - 2012</h2>

	<a id="btn_sortear" href="sortear.php" title="Sortear um participante"> Sorteio</a>

</div>

<?php

//executa a conexão com o banco, caso contrário mostra o erro ocorrido
$conexao = mysql_connect("mysql100.prv.f1.k8.com.br", "ficapunigranrio", "Maria132526") or die(mysql_error());

//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
mysql_select_db("ficapunigranrio", $conexao) or die(mysql_error());

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$sql = "SELECT id_matricula, id_nome, id_turma, id_unidade FROM  Alunos ORDER BY RAND() LIMIT 1";

$consulta = mysql_query($sql, $conexao) or die(mysql_error());

if (mysql_num_rows($consulta) == 0) //Retorna o numero de linhas da variavel consulta
    echo "Pessoa não encontrada.<br>";
else
{   // esse comando mysql_fetch_array transforma a variavel linha em um vetor da qtd de campos
    // da tabela da consulta com o resultado da consulta
    $linha = mysql_fetch_array($consulta);
    $mat = $linha["id_matricula"];
    $nome = $linha["id_nome"];
    $turma = $linha["id_turma"];
    $unidade = $linha["id_unidade"];
    

    echo "<h3>$mat<br/>$nome<br/>$turma - $unidade</h3>";
}

?>

</body>
</html>