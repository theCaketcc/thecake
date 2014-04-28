<?php

echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';
$email =$_POST['login'];
$senha =$_POST['senha'];
$nome=$_POST['nome'];
$tipoUsuario='RES';
$query="INSET INTO usuario( EMAIL_USUARIO, SENHA_USUARIO, NOME_USUARIO, TIPO_USUARIO)";
$query.= " VALUES('$email', '$senha', '$nome', '$tipo_usuario')";

if(mysql_querry ($query)){
    
  echo '<script>alert("Usuário cadastrado com sucesso! ")</script>';
echo'<a href=frmlogin.php>Efetuar login</a>';}
else
{ echo'<script>
     alert("Não foi possível seu cadastro!")
     location.href=index.php
         </script>';
    
    
}