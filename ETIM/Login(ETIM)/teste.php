<?php
include 'Contato.class.php';

$conmtato= new Contato();

$conmtato->setNome("fábio");
$conmtato->setEmail("fabioclaret@gmail.com");
$conmtato->setSenha("123");

echo "<h2>Nome: ".$conmtato->getNome()."<br></h2>";
echo "Email: ".$conmtato->getEmail()."<br>";
echo "Senha: ".$conmtato->getSenha()."<br>";