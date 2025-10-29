<?php
include("db.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$celular = $_POST['celular'];

try {
    $sql = "INSERT INTO pessoas (nome, idade, cpf, endereco, email, celular)
            VALUES (:nome, :idade, :cpf, :endereco, :email, :celular)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':celular', $celular);

    $stmt->execute();

    echo "✅ Cadastro realizado com sucesso!";
} catch (PDOException $e) {
    echo "❌ Erro ao cadastrar: " . $e->getMessage();
}
?>
