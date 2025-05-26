<?php
//PHP BÁSICO

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

/*$variavel1 = 'Matheus';
$variavel2 = 'Matheus';

if ($variavel1 == $variavel2){
    echo '<div style="width:10px;height:10px;background:black;"></div';
    echo '<br>';
}
else {
    echo 'A condição não bate';
}*/

$var1 = 13 + 7;
$var2 = 13 + 7;

if ($var1 == $var2) {
    echo 'Variável 1 é igual a variável 2';
}
else if ($var1 > $var2) {
    echo 'Variável 1 é igual ou maior que variável 2';
}
else {
    echo 'Variável 1 é manor que variável 2';
}
echo '<br>';

//operadores
#um sinal de igual quer dizer que estamos atribuindo um valor, sempre retorna verdadeiro.
$nome_01 = 'mah';
$nome_02 = 'lah';

if ($nome_01 = $nome_02) {
    echo 'Verdade';
}
else {
    echo 'Falso';
}
echo '<br>';
#dois iguais comparam se os valores são iguais.
$nome_001 = 'mah';
$nome_002 = 'lah';

if ($nome_001 == $nome_002) {
    echo 'Verdade';
}
else {
    echo 'Falso';
}
echo '<br>';
#sinal de != conferimos para ver se é diferente.
$nome_0001 = 'mah';
$nome_0002 = 'lah';

if ($nome_0001 != $nome_0002) {
    echo 'Verdade';
}
else {
    echo 'Falso';
}
echo '<br>';
#três sinais de igual conferem se são identicos, ou seja mesmo valor e mesmo tipo.
$nome_00001 = 'mah';
$nome_00002 = 'lah';

if ($nome_00001 === $nome_00002) {
    echo 'Verdade';
}
else {
    echo 'Falso';
}
echo '<br>';

//operadores matemáticos e lógicos
$numero_01 = 20;
$numero_02 = 21;

if ($numero_01 < $numero_02) {
    echo 'Número 1 é menor que número 2';
}
else if ($numero_01 <= $numero_02) {
    echo 'Número 1 é menor ou igual ao número 2';
}
else if ($numero_01 == $numero_02) {
    echo 'Número 1 é igual ao número 2';
}
else if ($numero_01 >= $numero_02) {
    echo 'Número 1 é maior que número 2';
}
else {
    echo 'Nenhuma das condições batem';
}
echo '<br>';
$var_01 = 'valor1';
$var_02 = 'valor2';
$var_03 = 'valor1';
#operador lógico &&, todos os valores tem que ser iguais para dar verdade, se não ele vai para o else.
if (($var_01 == $var_02) && $var_02 == $var_03) {
    echo 'Os valores são iguais';
}
else {
    echo 'Falso';
}
echo '<br>';
#operador lógico `ou, ||`no caso anterior se apenas 2 variáveis forem iguais dependendo da condição, ele já irá dar verdade.
if ($var_01 == $var_02 || $var_01 == $var_03) {
    echo 'Verdade';
}
else {
    echo 'Falso';
}
echo '<br>';
echo '<hr>';
//loopings
#laço de repetição for
for ($contador=0; $contador<3;$contador++) {
    echo 'Olá mundo';
    echo '<br>';
}
echo '<br>';
#laço de repetição while
$contador_while = 0;
while ($contador_while < 3) {
    $contador_while++;
    echo 'The end has no end';
    echo '<br>';
}
echo '<br>';
echo '<hr>';

//PHP INTERMEDIÁRIO

//foreach e for para arrays
$arr = array('Matheus','Larissa','Guiomar','Orlando');

foreach ($arr as $key =>$value) {
    echo $key;
    echo '<br>';
    echo $value;
    echo '<br>';
}

$total = count($arr);

for ($i = 0; $i < $total; $i++) {
    echo $arr[$i];
    echo '<br>';
}
echo '<br>';

//array multidimensional
$arr2 = array(array('Mark','John','Marie'),array(40,50,60));
echo $arr2[0][2];
echo '<br>';

//die e sleep
sleep(0);
echo 'um';
echo '<br>';

$number1 = 1;
$number2 = 1;

if ($number1 == $number2) {
    echo 'O die não será executado';
}
else {
    die('morte');
}
echo '<br>';
echo 'Olá mundo !!!';
?>