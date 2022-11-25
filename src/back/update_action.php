<?php
include "./utils.php";
include "./conexao.php";
$id = cleanInput($_GET['id']);
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = cleanInput($_POST['tel_fixo']);
$celular = cleanInput($_POST['celular']);
$altura = cleanAlturaEPeso($_POST['altura']);
$peso = cleanAlturaEPeso($_POST['peso']);
$data = $_POST['data'];
$logradouro = $_POST['logradouro'];
$rua = $_POST['rua'];
$cep = cleanInput($_POST['cep']);
$numeroRua = $_POST['numeroRua'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

// echo "<pre>"; print_r($id); echo "</pre>"; exit;



try {
    $query = "UPDATE `Usuario` SET nome= :nome, ddd_tel_fixo= :tel, ddd_tel_cel= :cel, email= :email, data_cadastro= :data_cad, logradouro= :logra, nome_logradouro= :rua, numero= :num, CEP= :cep, complemento= :compl, bairro= :bairro, cidade= :cidade, estado= :estado, altura= :altura, peso= :peso WHERE RG= :rg";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":tel", $telefone);
    $stmt->bindValue(":cel", $celular);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":data_cad", $data);
    $stmt->bindValue(":logra", $logradouro);
    $stmt->bindValue(":rua", $rua);
    $stmt->bindValue(":num", $numeroRua);
    $stmt->bindValue(":cep", $cep);
    $stmt->bindValue(":compl", $complemento);
    $stmt->bindValue(":bairro", $bairro);
    $stmt->bindValue(":cidade", $cidade);
    $stmt->bindValue(":estado", $estado);
    $stmt->bindValue(":altura", $altura);
    $stmt->bindValue(":peso", $peso);
    $stmt->bindValue(":rg", $id);

    $stmt->execute();
    session_start();
    $_SESSION['rg'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['altura'] = $altura;
    $_SESSION['peso'] = $peso;
    $_SESSION['endereco'] = $rua . ", " . $bairro . ", " . $cidade . "- " . $estado;
    header("location: ../views/pages/user.php");

} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
    exit;
}
