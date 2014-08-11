<?php
function validaAutenticacao($tipoUser,$link)
{
    
 session_start();
 if(!isset($_SESSION['email']) or !isset($_SESSION['senha']))
{
        session_destroy();
        echo 'Voce não efetuou o login<br/>';
        echo '<a href=frmlogin.php> Efetuar Login</a>';
} else {
    // Obs: fazer a validação para  que o usuario x não entre no ambiente y
    if($tipoUser == 'RES'){
    include_once 'conexao/conecta.inc';
    
    }else {
        include_once '../conexao/conecta.inc';
    }
    
    $email = isset($_SESSION['email'])?$_SESSION['email']:null;
    $senha = isset($_SESSION['senha'])?$_SESSION['senha']:null;
    $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
    $acao = mysql_query($query);
    $usuarios = mysql_fetch_array($acao);
    $emailUsuario = $usuarios['EMAIL_USUARIO'];
    $tipoUsuario  = $usuarios['TIPO_USUARIO'];
    $senhaUsuario = $usuarios['SENHA_USUARIO'];
    if($tipoUsuario !== $tipoUser)
        {
        session_destroy();
        echo '<script>
                      alert("Acesso negado para o seu tipo de Usúaio")
                      location.href="'.$link.'"
                      </script>' ;  
        }
    }
}