<?php

include 'conexao.php';
use PDOException;


if (isset($_POST)) {


    $query = "INSERT INTO Usuario (RG, nome, ddd_tel_fixo, ddd_tel_cel,email,data_cadastro,logradouro,nome_logradouro,numero,CEP,complemento,bairro,cidade,estado,altura,peso)
     VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


    try {

        $stmt = $pdo->prepare($query);

        $stmt->execute(
            $_POST['rg'],
            $_POST['nome'],
            $_POST['tel_fixo'],
            $_POST['celular'],
            $_POST['email'],
            $_POST['data'],
            $_POST['logradouro'],
            $_POST['rua'],
            $_POST['numeroRua'],
            $_POST['cep'],
            $_POST['complemento'],
            $_POST['bairro'],
            $_POST['cidade'],
            $_POST['estado'],
            $_POST['altura'],
            $_POST['peso']
        );
    }catch(PDOException $e) {
        echo $e->getMessage();
    }


}
