<?php
// recebendo o email do formulário
$email = $_GET['login'];
// configuração com banco de dados
$server = 'localhost';
$user   = 'root';
$passoword = '12345678';
$database = 'loginoficial3fdb';
//conexão com o Mysql
$connection = mysql_connect($server,$user,$passoword);
mysql_select_db($database,$connection);

// Montando a query de consulta e executando a query
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
// criando uma matriz para guardar todos emails já cadastrados no banco
$emailsCadastrados = array();
// Buscando os email cadastrados e montado a matriz emailsCadastradas
while($usuarios = mysql_fetch_assoc($result))
{
    $emailsCadastrados[] = $usuarios['EMAIL_USUARIO'];
}
// A função in_array(), é responsável em "buscar" um referido elemento dentro de uma matriz.
// A função recebe dois parâmetros: "o elemente a ser pesquisado" e a "matriz de elementos"
// Veja:
if(in_array($email, $emailsCadastrados))
{
    echo 'false';
}else{
    echo 'true';
}
exit();