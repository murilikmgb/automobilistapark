<?php

// Configurações do banco
$host    = "sql203.infinityfree.com";        // substituir
$usuario = "if0_42039647";        // substituir
$senha   = "o7o72009";        // substituir
$banco   = "if0_42039647_automobilistapark";        // substituir

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!";
?>