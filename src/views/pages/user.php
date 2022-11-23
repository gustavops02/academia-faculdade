<?php
include '../../back/conexao.php';
if (!isset($_SESSION)) {
    session_start();
} else {
    die("Você não está cadastrado. ");
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/logo_domain-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../styles/homepage.css">
    <link rel="stylesheet" type="text/css" href="../styles/user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/a9f11940bf.js" crossorigin="anonymous"></script>

    <title>Academia | Área do Cliente</title>
</head>

<body>

    <div class="container_session">
        <nav class="navbar_main">
            <div class="pic_brand"></div>
            <span class="logo"></span>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="#">Espaço do Cliente</a></li>
                <li><a href="./form.php">Junte-se a nós</a></li>
                <li><a href="#">Agendamento</a></li>
                <li><a href="./planos.html">Planos</a></li>
            </ul>
        </nav>

        <?php

            include "../../back/utils.php";
            $rg = cleanInput($_SESSION['rg']);
            $altura = cleanAlturaEPeso($_SESSION['altura']);
            $peso = cleanAlturaEPeso($_SESSION['peso']);

        ?>


        <div class="container_user">
            <div class="user_info">
                <i class="fa-solid icon_user fa-circle-user"></i>

                <div class="content_info">Nome : <span class="info"><?php echo $_SESSION['nome']; ?></span></div>
                <div class="content_info">E-mail : <span class="info"><?php echo $_SESSION['email']; ?></span></div>
                <div class="content_info">RG : <span class="info"><?php echo $rg; ?></span></div>
                <div class="content_info">Altura : <span class="info"><?php echo $altura; ?></span></div>
                <div class="content_info">Peso : <span class="info"><?php echo $peso; ?></span></div>
                <div class="content_info">Endereço : <span class="info"><?php echo $_SESSION['endereco']; ?></span></div>

                <div class="buttons_crud">
                    <a href="../../back/update.php?id=<?php echo $_SESSION['rg'] ?>"><button class="update">Alterar</button></a>
                    <a href="../../back/delete.php?id=<?php echo $_SESSION['rg'] ?>"><button class="delete">Apagar</button></a>
                </div>
            </div>



        </div>

        <footer>
            <div class="cadastro_ref">
                <h5>Clique no link e faça parte do time:</h5>
                <a href="./form.php">Cadastre-se</a>
            </div>
            <div class="informacoes">
                <h5>Informações</h5>
                <ul>
                    <li><a href="#">Central de Ajuda</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Termos e estatutos</a></li>
                </ul>
            </div>
            <div class="contato">
                <h5>Contato</h5>
                <div class="contato_icons">
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://github.com/gustavops02/college-gym" target="_blank"><i class="fa-brands fa-github"></i></a>

                </div>
            </div>

        </footer>
</body>