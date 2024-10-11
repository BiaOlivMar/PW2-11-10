<?php
echo "<script>
        alert('Usuário logado com sucesso!')
     </script>";
session_start();
if(isset($_SESSION['nome'])){
    $nome = $_SESSION['nome'];
    echo "Bem Vindo a Nossa Pagina $nome";
}else{
    // header("location:cadastrar.php");
}