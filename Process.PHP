<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['email']) || empty($_POST['senha']))
       {
            header("location:login.php?Vazio = Por favor, preencha os espaços em branco");
       }
       
       else
       {
            $query="select * from acesso where login='".$_POST['email']."' and senha='".$_POST['senha']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                header("location:login.php?Inválido = Digite o nome de usuário e a senha corretos");
            
            }
            else
            {
            
 header("location:conexao.php");
 echo 'Bem Vindo';

            }
       }
    }
    else
    {
        echo 'Não está trabalhando agora pessoal';
    }




?>