<?php

include "conexao.php";
include "utils.php";

$rg = cleanInput($_POST['rg']);

try {

    $query = "SELECT * FROM Usuario WHERE RG=:rg";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":rg", $rg);

    $stmt->execute();

    if ($stmt->rowCount() !== 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        $nome = $user['nome'];
        $email = $user['email'];
        $endereco = $user['nome_logradouro'] . " " . $user['numero'] . ", " . $user['bairro'] . ", " . $user['cidade'] . " - " . $user['estado'];
        header("location: ../views/pages/cliente.php?rows=1&rg=".$rg."&email=".$email."&nome=".$nome."&endereco=".$endereco);
    } else {
        header("location: ../views/pages/cliente.php?rows=0");
        session_destroy();
    }
} catch (PDOException $e) {
    die("erro: " . $e->getMessage());
}
