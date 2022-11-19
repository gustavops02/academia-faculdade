<?php

include 'conexao.php';

$rg = $_POST['rg'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel_fixo'];
$celular = $_POST['celular'];
$data_cadastro = $_POST['data'];
$logradouro = $_POST['logradouro'];
$rua = $_POST['rua'];
$numero = $_POST['numeroRua'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$tipo_user = 'c';
$altura = $_POST['altura'];
$peso = $_POST['peso'];

if (isset($_POST)) {


    $query = "INSERT INTO Usuario (RG, nome,email, ddd_tel_fixo, ddd_tel_cel, data_cadastro, logradouro, nome_logradouro, numero, CEP, complemento, bairro, cidade, estado, tipo_usuario, altura, peso)
     VALUES (:RG, :nome, :email, :telefone, :celular, :data_cadastro, :logradouro, :rua, :numero, :cep, :complemento, :bairro, :cidade, :estado, :tipo_user, :altura, :peso)";


    try {

        $stmt = $pdo->prepare($query);

        $stmt->bindValue(':RG', cleanInput($rg));
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':telefone', cleanInput($telefone));
        $stmt->bindValue(':celular', cleanInput($celular));
        $stmt->bindValue(':data_cadastro', $data_cadastro);
        $stmt->bindValue(':logradouro', $logradouro);
        $stmt->bindValue(':rua', $rua);
        $stmt->bindValue(':numero', $numero);
        $stmt->bindValue(':cep', $cep);
        $stmt->bindValue(':complemento', $complemento);
        $stmt->bindValue(':bairro', $_POST['bairro']);
        $stmt->bindValue(':cidade', $_POST['cidade']);
        $stmt->bindValue(':estado', $_POST['estado']);
        $stmt->bindValue(':tipo_user', 'c');
        $stmt->bindValue(':altura', cleanAlturaEPeso($_POST['altura']));
        $stmt->bindValue(':peso', cleanAlturaEPeso($_POST['peso']));

        $stmt->execute();

        if($stmt->rowCount() > 0) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = $nome;
            $_SESSION['rg'] = $rg;
            $_SESSION['altura'] = $altura;
            $_SESSION['peso'] = $peso;
            $_SESSION['endereco'] = $rua.", ".$bairro.", ".$cidade."- ".$estado;
            header('Location: ../views/pages/user.php');
        } else {
            die('Erro...');
        }




    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


function cleanInput($string)
{
    //str_replace substitui um carácter por outro, nesse caso espaço por nada
    $string = str_replace(' ', '', $string);
    $string = trim($string);

    //Nessa linha o traço
    $string = str_replace('-', '', $string);
    //A abertura de parenteses
    $string = str_replace('(', '', $string);
    //O fechamento de parenteses
    $string = str_replace(')', '', $string);
    //O ponto
    $string = str_replace('.', '', $string);
    //No fim é retornado a variável com todas as alterações
    return $string;
}

function cleanAlturaEPeso($string) {
    $string = str_replace(',', '.', $string);
    return $string;
}
