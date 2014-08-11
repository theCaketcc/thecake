<?php
echo '<meta charset=UTF-8>';
// configuração 
$server = 'localhost';
$user   = 'root';
$password = '12345678';
$database = 'loginoficial3fdb';
//conexão com o Mysql
$connection = mysql_connect($server,$user,$password);
if ($connection === FALSE)
{
    echo 'Não foi possível a conexão com o  MySQL<br/>';
    echo mysql_error();
}else{
    // Selecionando o Banco de dados
    if(!mysql_select_db($database,$connection))
    {
        echo 'Não foi possivel selecionar o banco de dados'. $database .'<br/>';
        echo mysql_error(); 
    }        
}    