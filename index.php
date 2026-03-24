<?php
// 1.Exibir Mensagem
echo "1.Exibir Mensagem"."<br><br>";
echo "Hello word!"."<br><br>";
echo "<hr>";

// 2.Variáveis
echo "2.Variáveis"."<br><br>";
$nome = "Wesley";
$idade = 18;
echo "Bem-vindo ".$nome."! Sua idade é ".$idade."<br><br>";
echo "<hr>";

// 3.Operações Matemáticas
echo "3.Operações Matemáticas"."<br><br>";
$n1 = 5;
$n2 = 2;

// Soma
$soma = $n1 + $n2;
echo "A soma dos números é igual a: ".$soma."<br><br>";

//Subtração
$subtracao = $n1 - $n2;
echo "A subtração dos números é igual a: ".$subtracao."<br><br>";

// Multiplicação
$multiplicacao = $n1 * $n2;
echo "A multiplicação dos números é igual a: ".$multiplicacao."<br><br>";

// Soma
$divisao = $n1 / $n2;
echo "A divisão dos números é igual a: ".$divisao."<br><br>";
echo "<hr>";

// 4.Número par ou ímpar
echo "4.Número par ou ímpar"."<br><br>";
$n3 = 3;
if ($n3 % 2 == 0){
    echo "O número é par."."<br><br>";
} else {
    echo "O número é ímpar."."<br><br>";
}
echo "<hr>";

// 5.Verificar Maioridade
echo "5.Verificar Maioridade"."<br><br>";
if ($idade >= 18) {
    echo $nome." você é maior de idade"."<br><br>"; 
} else {
    echo $nome." você é menor de idade"."<br><br>";
}
echo "<hr>";

// 6.Contagem com for
echo "6.Contagem com for"."<br><br>";
echo "Contagem de 1 a 10."."<br><br>";
for ($i = 1; $i <=10; $i++) {
    echo "Número: ".$i."<br>";
}
echo "<hr>";

// 7.Lista de nomes(array)
echo "7.Lista de nomes(array)"."<br><br>";
$nomes = ["Wesley", "Samuel", "Iris"];
for ($j = 0; $j < 3; $j++) {
    echo $nomes[$j]."<br>";
}
echo "<hr>";

// 8.Função de saudação
echo "8.Função de saudação"."<br><br>";
function saudacao($nome) {
    return "Olá, ". $nome."! Bem-vindo(a) ao meu sistema."."<br><br>";
}
echo saudacao('Wesley');
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h3>9.Formulário de Saudação</h3>
<form action="atividade9.php" method="post">
    <label for="nome"> Nome: </label>
    <input type="text" id="nome" name="nome"><br><br>
    <button type="submit">Enviar</button>
</form>
</body>

<?php
echo "<hr>";

// 10.Contagem com While
echo "10.Contagem com While"."<br><br>";
$k=1;
while ($k <= 10) {
    echo "Número: ".$k."<br>";
    $k++;
}
echo "<hr>";
?>