<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Inserir Usuários</title>
</head>
<body>
   
    <div class="insertUser">
        <div class="usuario">
            <h2>Insert User</h2><br><br>
            <form  method="POST" action="">
           
                    <label for="nome">Digite seu nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Judiacir"><br><br>
               
                    <label for="email">Digite seu email:</label>
                    <input type="text" id="email" name="email" placeholder="Ex: meuemail@gmail.com"><br><br>
           
                    <label for="senha">Digite sua senha:</label>
                    <input type="hint" id="senha" name="senha" placeholder="Ex: 123456"><br><br>
               
                <input id="btn" type="submit" value="Entrar" name="btnLogin">
                <input id="btnCadastrar" type="submit" value="Cadastre-se" name="btnCadastrar">
            </form>
    </div>      
 
</body>
</html>

<?php
session_start();

require"Contato.class.php";

$contato = new Contato();


if(isset($_POST['btnCadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    $dados = $contato->checkUser($email);
    if(!empty($dados)){
        echo "<script>
        alert('Usuário já cadastrado!')
     </script>";
    }else{
        $contato->insertUser($nome,$email,$senha);
        echo "<script>
        alert('Usuário logado com sucesso!')
     </script>";
    }
}  elseif( isset($_POST['btnLogin'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dados = $contato->checkPassUser($email,$senha);
    if(!empty($dados)){
        $_SESSION['nome'] = $dados['nome'];
        header("location:index.php");
    }
    
        
}

