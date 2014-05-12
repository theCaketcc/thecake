<!DOCTYPE html>
<html>
    <head>
        <title> Formulário</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="#">
    </head>    
    <body>
        <?php
              include 'conexao/conecta.inc';
              $codigo_usuario = $_REQUEST['codigo'];
              
              //echo '<h1>'.$codigo_usuario.'</h1>';
              $sql = "SELECT * FROM usuario WHERE COD_USUARIO ='$codigo_usuario'";
              $result = mysql_query($sql);
              $usuarios = mysql_fetch_array($result);
        ?>
        
        <form action="atualizarUsuario.php" method="post">
           Nome: <input type="text" name="nome" required  value="<?php echo $usuarios['NOME_USUARIO'] ?>"> <br/>
           Email: <input type="password" name="email" required value="<?php echo $usuarios['EMAIL_USUARIO']?>"> <br/>
           Confirme Email: <input type="email" name="confemail" required> <br/> 
           Senha: <input type="text" name="senha" required="" value="<?php echo $usuarios['SENHA_USUARIO']?>"> <br/>
           Confirme Senha: <input type="text" name="confsenha" required> <br/>
           <input type="submit" value="Atualizar" >
           </form>
        
        
    </body>
</html>