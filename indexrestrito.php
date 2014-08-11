<?php
//session_start();
require 'includes/funcoesuteis.inc';
validaAutenticacao('RES','frmlogin.php');
$codigo_usuario = isset($_SESSION['codigo_usuario']) ?$_SESSION['codigo_usuario']:null;
$email       = isset($_SESSION['email']) ?$_SESSION['email']:null;
$senha       = isset($_SESSION['senha']) ?$_SESSION['senha']:null;
$nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;

echo '<h2>Ambiente Restrito</h2>';

echo '<a href=logout.php>Efetuar Logout</a><br/>';

echo '<a href=frmAtualizar.php?codigo='.$codigo_usuario.'>Atualizar (Perfil)</a><br/>';


/*if($nomeUsuario){
     echo 'Bem - Vindo Sr º(ª)' . $nomeUsuario;
}
 
 */
  
 