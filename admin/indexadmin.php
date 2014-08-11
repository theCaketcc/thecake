<?php
//session_start();
require '../includes/funcoesuteis.inc';
validaAutenticacao('ADM','../frmlogin.php');

$email       = isset($_SESSION['email'])?$_SESSION['email']:null;
$senha       = isset($_SESSION['senha'])?$_SESSION['senha']:null;
$nomeUsuario = isset($_SESSION['nomeUsuario'])?$_SESSION['nomeUsuario']:null;


echo '<h2>Ambiente Administrativo</h2>';
echo '<a href=../logout.php>Efetuar Logout</a><br/>';