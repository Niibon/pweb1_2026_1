<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Bruna";
        $idade = 18;
        echo "Olá Mundo PHP! <br>Nome: $nome <BR>Idade: $idade <br>";

        if($idade>=18){
            echo "<br>$nome é maior de idade";
        }
        else {
            echo "<br>$nome é menor de idade";
        }

        //VETORES
        $notas = [5, 7, 10, 9];

        print_r($notas);

        echo "<br>";
        for ($i = 0; $i < count($notas); $i++) { //count notas conta o tamanho do vetor
            echo $notas[$i] . "<br>";
        }

        foreach ($notas as $item) {
            echo $item . "<br>";
        }

        //vetores com string

        $nomes = ["Arthur", "Bruna", "Maria", "Emily", "Yasmim", "Vitória", "Luiza"];

        foreach ($nomes as $item) {
            echo $item . "<br>";
        }

        echo "<br>";
        $carro = ['modelo' => "Mustang", 'cor' => "Branco", 'ano' => 2026];

        echo $carro['modelo'] . " - " . $carro['cor'];

        //MATRIZ
        echo "<br>";
        $carros = [
            ['modelo' => "Mustang", 'cor' => "Branco", 'ano' => 2026],
            ['modelo' => "Fusca", 'cor' => "Azul", 'ano' => 1976],
            ['modelo' => "Brasília", 'cor' => "Amarela", 'ano' => 1969],
        ];

        //echo $carros[0]['modelo'] . " - " . $carros[0]['cor'];

        foreach ($carros as $indice => $carro1){
            echo $indice + 1;
            echo "Modelo: " . $carro1['modelo'] . ' Ano:' . $carro1['ano'];
            echo "<br>";
        }
    ?>

    <p> Meu Site <?=  $carro=['modelo'] . " -Ano " . $carro['ano'] ?> </p>

    <?php
        include "./php/aula02.php";//para acessar algo de outro arquivo
    ?>
</body>
</html>