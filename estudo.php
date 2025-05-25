<?php

//echo imprime na tela
echo "olá mundo";
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

//algumas variáveis

//string
$nome = "Matheus";
echo $nome;
echo '<br>';

//inteiro
$idade = 27;
echo $idade;
echo '<br>';

//concatenação
echo 'Meu nome é ' .$nome. ' e minha idade é ' .$idade;
echo '<br>';
echo "Meu nome é $nome e minha idade é $idade";
echo '<br>';

//constantes
define('SEXO','Masculino');
echo SEXO;
echo '<br>';

//arrays
$empresas = array('Zella', 'Bracell', 'Raizen');
echo $empresas[0];
echo '<br>';

//operações matemáticas
$numero = 10;
$numero2 = 6;
$resultado = $numero + $numero2;
echo $resultado;
echo '<br>';
#porcentagem
$resto = 1 % 2;
echo $resto;
echo '<br>';

//condições
$variavel1 = 'Matheus';
$variavel2 = 'Matheus';

if ($variavel1 == $variavel2){
    echo '<div style="width:10px;height:10px;background:black;"></div';
}
else {
    echo 'A condição não bate';
}
?>