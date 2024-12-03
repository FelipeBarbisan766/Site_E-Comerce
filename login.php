<?php
include('conexao.php');
 
// if(!isset($_SESSION)){
//     session_start();
//     header('Location:cadastro.php');
// }

if(isset($_POST['txt_email']) || isset($_POST['txt_password'])) // verifica se existe as variaveis email e senha
{
    if(strlen($_POST['txt_email']) == 0) // o "strlen" conta quantas letras existe na variavel então se for = a 0 nada foi escrito
    {
        echo '...';
    }
    else if(strlen($_POST['txt_password']) == 0)
    {
        echo '...';
    }
    else{
        $email = $conexao->real_escape_string($_POST['txt_email']);
        $password = $conexao->real_escape_string($_POST['txt_password']);

        $sql_code = "SELECT * FROM client WHERE cli_email = '$email' AND cli_password ='$password'";
        $sql_query = $conexao->query($sql_code) or die("falha na execução do codigo");

        $quantidade = $sql_query-> num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];

            header('Location: cadastro.php');

        }else{
            echo'falha ao logar';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css">
    <!-- Codigo do Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
</head>
<body>
    
<div class="wrapper fadeInDown"> 
  <div class="content-login">
      <h2 class="active"> Login </h2>
      <form class="box-login" method="post" action="#">
        <input type="email" id="email" class="campo" name="txt_email" placeholder="E-mail">
        <input type="text" id="password" class="campo" name="txt_password" placeholder="password">
        <input type="submit" class="botao" value="Entrar">
      </form>
  </div><!--Form Content-->
</div><!--wrapper-->
</body>
</html>