<?php

    //requisitar classes do outro arquivo
    require_once 'classes/calculadora.php';

    //salvar dados do formulario nas variaveis
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    //instanciar classe
    $calculadora = new Calculadora();

    //chamada dos metodos para colocar os numeros para realizar operacoes
    $calculadora->setNumero1($numero1);
    $calculadora->setNumero2($numero2);

    //testes para determinar a operacao a ser utilizada
    switch($operacao){

        case 'somar':
            $calculadora->somar();
            echo $calculadora->getTotal();
        break;

        case 'subtrair':
            $calculadora->subtrair();
            echo $calculadora->getTotal();
        break;

        case 'multiplicar':
            $calculadora->multiplicar();
            echo $calculadora->getTotal();
        break;

        case 'dividir':
            $calculadora->dividir();
            echo $calculadora->getTotal();
        break;

        default:
            echo "Deu pau ae primo, manda o animal do programador consertar";

    }    

?>

<br>
<br>
<a href="index.html">Voltar</a>