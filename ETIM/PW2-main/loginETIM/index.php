<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Inserir Usuários</title>
</head>
<body>
    
<div class="login"> 
    <h2>Registro</h2>
    
    <form  method="POST" action="">
        <div class="box-user">
            <label for="nome">Inserir nome:</label>
            <input type="text" id="nome" name="nome" placeholder="informe seu nome"><br><br>
        </div>
        <div class="box-user">
            <label for="email">Inserir email:</label>
            <input type="text" id="email" name="email" placeholder="informe seu email"><br><br>
        </div>
        <div class="box-user">
            <label for="senha">Inserir senha:</label>
            <input type="password" id="senha" name="senha" placeholder="informe seu senha"><br><br>
        </div>
        <input class="btn" type="submit" value="Registre-se">
        </form> 
    <br>
</div>   
          

</body>
</html>
<?php

if (isset($_POST["nome"])) {
    $nome =  $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    if ($nome!=null && $email!=null && $senha!=null) {
        include 'Contato.class.php';


        $contato = new Contato();

        $resultado = $contato->insertUser($nome, $email, $senha );
        
        if($resultado == true) {
            echo"
            <script>
                alert('Registro inserido com sucesso')
            </script>";    
        }
    }
}
      
   

