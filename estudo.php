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
echo '<br>';

//entendendo funções nativas e criando funções
/*function mostrarNome() {
    echo 'O nome é: Matheus Ribeiro';
}
mostrarNome();
echo '<br>';*/

function mostrarNome($nome, $idade) {
    echo 'O nome é: Matheus Ribeiro';
    echo '<br>';
    echo 'Idade: '.$idade;
}
mostrarNome('Matheus', 27);
echo '<br>';

//utilizando include e date
#trabalhando com datas
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y H:i:s');
echo $data;
echo '<br>';

/*
Para adicionarmos segundos na hora que setamos da pra usar
a função time adicionando o tempo que queremos acrescentar em
segundos. 
*/
date_default_timezone_set('America/Sao_Paulo');
$data2 = date('d/m/Y H:i:s',time()+(60*10)); //60*10 = a 10 minutos.
echo $data2;
echo '<br>';

#include
include('header.php');
?>
<html>
    <body>
        <h1>Olá mundo.</h1>
    </body>
</html>
<?php
include('footer.php');

//funções para string

$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac justo facilisis, sagittis sem sit amet, imperdiet dolor. In sed dictum libero. Cras massa diam, interdum a tincidunt nec, rutrum iaculis eros. Duis non massa nisi. Ut a dui sed libero pretium ornare et rhoncus libero. Mauris eleifend faucibus nunc. Morbi lobortis gravida tortor, vitae laoreet mauris posuere vitae. Nullam vehicula convallis massa, sit amet faucibus orci iaculis sed. Nullam ut ligula ac nibh rutrum eleifend vitae eget urna. Aenean congue mollis sapien, nec mollis ipsum consectetur nec. Vestibulum in nisl aliquam, pulvinar sem at, mollis eros. Aliquam vitae urna nec odio hendrerit interdum. Cras gravida tristique porttitor. Pellentesque venenatis sapien eu augue consequat fringilla.';

#serve para recortar uma string
echo substr($conteudo,0,20);
echo '<br>';

$name = 'Matheus Henrique Ribeiro';
$names = explode(' ',$name);
print_r($names);
echo '<br>';

$names = implode(' ',$names);
echo $names;
echo '<br>';

$conteudo2 = '<h1>Hello World</h1> Outra coisa';
echo strip_tags($conteudo2);
echo '<br>';

echo htmlentities('<div>Oi</div>');
echo '<br>';

//switch, continue e break

$name_1 = 'Matheus';

switch($name_1) {
    case 'Matheus':
        echo 'Minha variável é Matheus';
        break;
    case 'João':
        echo 'Minha variável é João';
        break;
}
echo '<br>';

for ($cont = 0; $cont < 10; $cont++){
    if($cont == 5)
    continue;
    echo $cont;
    /*if($cont == 5)
    break;*/
}
echo '<br>';

//funções para manipular arrays
#array_merge serve para unir 1 ou mais arrays
$array1 = array("cor" => "vermelho", 2, 4);
$array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo '<br>';

#array_intersect_key serve para verificar se há outro array com a mesma chave
$array10 = array("chave1"=>"valor1","chave2"=>"valor2");
$array11 = array("chave1"=>"outro valor", "chave3"=>"valor3", "chave4"=>"valor4");
print_r(array_intersect_key($array10, $array11));
?>