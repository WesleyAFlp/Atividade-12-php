<?php 
function boas_vindas($nome) {
        echo "Olá, " . $nome . "! Bem-vindo(a) ao meu sistema." . "<br><br>";
} 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    boas_vindas($nome);
}
?>



