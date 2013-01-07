<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php

$vmatricula=(int)$_POST["mat"];
$vnome=$_POST["nome"];
$vemail=$_POST["email"];
$vturma=$_POST["turma"];
$vunidade=$_POST["unidade"];

//executa a conexão com o banco, caso contrário mostra o erro ocorrido
$conexao = mysql_connect("mysql100.prv.f1.k8.com.br", "ficapunigranrio", "Maria132526") or die(mysql_error());

//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
mysql_select_db("ficapunigranrio", $conexao) or die(mysql_error());

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$sql = "INSERT INTO Alunos (id_matricula, id_nome, id_email, id_turma, id_unidade) VALUES('$vmatricula', '$vnome', '$vemail', '$vturma', '$vunidade')";

$inclusao = mysql_query($sql);

echo "<script>alert('Parabéns $vnome você foi cadastrado com sucesso.');window.location='/2012';</script>";

?>

</body>
</html>