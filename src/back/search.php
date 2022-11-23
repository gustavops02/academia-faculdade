<?php

include "conexao.php";
include "utils.php";

$rg = cleanInput($_POST['rg']);
$email = $_POST['email'];

try {

    $query = "SELECT * FROM Usuario WHERE RG=:rg AND email= :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":rg", $rg);
    $stmt->bindValue(":email", $email);

    $stmt->execute();

    if ($stmt->rowCount() !== 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        session_start();

        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $email;
        $_SESSION['rg'] = $user['RG'];
        $_SESSION['endereco'] = $user['nome_logradouro'] . " " . $user['numero'] . ", " . $user['bairro'] . ", " . $user['cidade'] . " - " . $user['estado'];
        header("location: ../views/pages/cliente.php?rows=1");
    } else {
        header("location: ../views/pages/cliente.php?rows=0");
        session_destroy();
    }
} catch (PDOException $e) {
    die("erro: " . $e->getMessage());
}
