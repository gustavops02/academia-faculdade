<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/logo_domain-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../styles/homepage.css">
    <link rel="stylesheet" type="text/css" href="../styles/section.css">
    <link rel="stylesheet" type="text/css" href="../styles/cliente.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/a9f11940bf.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>POWER GYM | Área do Cliente </title>
    <style>
        .delete,
        .update {
            outline: none;
            border-radius: 4px;
            border: none;
            padding: 10px 27px;
            cursor: pointer;

        }

        .update {
            background-color: rgb(251, 220, 45);
            font-weight: bold;
            font-size: 15px;
        }

        .delete {
            margin-left: 1cm;
            font-size: 15px;
            font-weight: bold;
            color: #fff;
            background-color: rgb(239, 41, 41);
        }
    </style>
</head>

<body>
    <div class="container_session">
        <nav class="navbar_main">
            <div class="pic_brand"></div>
            <span class="logo"></span>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./cliente.php">Espaço do Cliente</a></li>
                <li><a href="./form.php">Junte-se a nós</a></li>
                <li><a href="#">Agendamento</a></li>
                <li><a href="./planos.html">Planos</a></li>
            </ul>
        </nav>
    </div>
    <div class="container_user">
        <div class="input_search">
            <form action="../../back/search.php" method="post">
                <label>Digite o seu RG</label>
                <input type="text" name="rg" id="rg" placeholder="XX.XXX.XXX-X" />
                <script>
                    $("#rg").mask("99.999.999-9");
                </script>
                <br>
                <input type="submit" value="Procurar" />
            </form>
        </div>
        <div class="find_users">
            <h1>Usuários encontrados: <?php echo $_GET['rows']; ?> </h1>


            <div class="user">
                <p><span>Nome: <?php echo $_GET['nome'] ?></span></p>
                <p><span>RG: <?php include "../../back/utils.php";
                                echo cleanInput($_GET['rg']) ?></span></p>
                <p><span>Email: <?php echo $_GET['email'] ?></span></p>
                <p><span>Endereço: <?php echo $_GET['endereco'] ?></span></p>

                <br><br>


            </div>
        </div>
        <div class="cont_buttons">
            <a href="./update.php?id=<?php echo $_GET['rg'] ?>"><button class="update">Alterar</button></a>
            <a href="../../back/delete.php?id=<?php echo $_GET['rg'] ?>"><button class="delete">Excluir</button></a>

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

</html>