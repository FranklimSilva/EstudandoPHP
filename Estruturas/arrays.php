<?php
$carros = ['Ferrari', 'BMW', 'Mercedes'];

print_r($carros); //mostra todos os dados dentro do array e suas posições.

print_r($carros[0]); // mostra o dado que esta na posição 0, no qual seria Ferrari

$endereco = [
    'cep' => "09450000",
    'numero' => "99",
    'cidade' => "Rio Grande da Serra",
    'estado' => "São Paulo"
];

print_r($endereco);//mostra todos os dados dentro do array e suas posições.

print_r($endereco['cep']);// mostra o dado que esta na posição cep, no qual seria 09450000

$enderecoPessoas = [
    'pessoa1' => array(
        "cep" => "09450000",
        "cidade1" => "Rio Grande da Serra"
    ),
    'pessoa2' => array(
        "cep" => "09412120",
        "cidade" => "Ribeirão Pires"
    )
    ]; 
    print_r($enderecoPessoas);

    if(isset($enderecoPessoas['pessoa1']['cidade1'])){ //o isset e uma função do vs code no qual ele verifica se a variavel esta declarada
        print_r($enderecoPessoas['pessoa1']['cidade1']);
    }
    else {
        echo "Chave invalida!";
    }
?>