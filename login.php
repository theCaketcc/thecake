<?php
// O include_once, inclui um determinado arquivo somente quando houver necessidade, ou seja, somente se o arquivo não tiver sido
// incluido anteriormente.
include_once 'conexao/conecta.inc';
session_start();
if(isset($_POST['email']) and isset($_POST['senha']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
    $result = mysql_query($query);
    $totalUsuario = mysql_num_rows($result);

    if($totalUsuario === 0) {
        echo '<a href=frmlogin.php>Usuario Inexistente! </a> <br/>';
    }else{
    $array = mysql_fetch_array($result);
    $senhaUsuario = $array ['SENHA_USUARIO'];
    $tipoUsuario  = $array ['TIPO_USUARIO'];
    if($senha !== $senhaUsuario)
    {
      echo '<a href=frmlogin.php> Senha não confere! </a>';
    }else{
    
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nomeUsuario'] = $array['NOME_USUARIO'];
    // Fechando a conexao com o Mysql
    mysql_close();
      
    if($tipoUsuario === 'RES')
    {
    echo '<script language= "JavaScript">
         location.href="indexrestrito.php"
         </script>';
    }else if($tipoUsuario === 'ADM'){
    echo '<script language= "JavaScript">
         location.href="admin/indexadmin.php"
         </script>';
    }else {
    session_destroy();
    echo '<a href=frmlogin.php> Tipo de Usuario Inexistente!</a>';
        }  
    }  
}
    }else{
    echo '<script language= "JavaScript">
    location.href="frmlogin.php"
    </script>';
}