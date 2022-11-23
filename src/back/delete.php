<?php 

include "./utils.php";
include "./conexao.php";
$id = cleanInput($_GET['id']); // ID passado no parâmetro

if (!isset($_GET)) {
    die("Erro... Algo deu errado: Não recebemos a requisição GET");
} else {

    $query = "DELETE FROM Usuario WHERE RG = :rg";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":rg", $id);

    $stmt->execute();

    if($stmt->rowCount() == 1) {
        session_destroy();
        header("location: ../views/pages/index.php");
    } else {
        echo "Algo deu errado";exit;
    }
}