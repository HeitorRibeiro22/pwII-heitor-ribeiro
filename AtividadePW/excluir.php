<?php
include("db.php");

$id = $_POST['id'];

$stmt = $conexao->prepare("DELETE FROM pessoas WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
