<?php
include("db.php");

$sql = "SELECT * FROM pessoas";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        echo "<strong>ID:</strong> " . $linha["id"] . "<br>";
        echo "<strong>Nome:</strong> " . $linha["nome"] . "<br>";
        echo "<strong>Idade:</strong> " . $linha["idade"] . "<br>";
        echo "<strong>CPF:</strong> " . $linha["cpf"] . "<br>";
        echo "<strong>Endereço:</strong> " . $linha["endereco"] . "<br>";
        echo "<strong>Email:</strong> " . $linha["email"] . "<br>";
        echo "<strong>Celular:</strong> " . $linha["celular"] . "<br><hr>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

$conexao->close();
?>
