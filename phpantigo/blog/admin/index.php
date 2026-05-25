<?php

include_once './database/db.class.php';

// instanciar um objeto da claasse DB
$conn = new db("aluno");

$dados = [
    'nome' => "Nibi", 
    'telefone' => "49 99834-5355",
    'email' => "ryan.wb@aluno.ifsc.edu.br",
];

$conn->store($dados);
echo "Inserido com Sucesso!";
?>