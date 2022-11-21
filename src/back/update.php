<?php

session_start();

include "./utils.php";
include "./conexao.php";
$id = cleanInput($_GET['id']); // ID passado no parâmetro
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
exit;
*/

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = cleanInput($_POST['tel_fixo']);
$celular = cleanInput($_POST['celular']);
$altura = cleanAlturaEPeso($_POST['altura']);
$peso = cleanAlturaEPeso($_POST['peso']);
$data = $_POST['data'];
$logradouro = $_POST['logradouro'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$numeroRua = $_POST['numeroRua'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

if (isset($_POST)) {
    try {
        $query = "UPDATE Usuario SET nome= :nome, ddd_tel_fixo= :tel, ddd_tel_cel= :cel, email= :email, data_cadastro= :data_cad, logradouro= :logra, nome_logradouro= :rua, numero= :num, CEP= :cep, complemento= :compl, bairro= :bairro, cidade= :cidade, estado= :estado, altura= :altura, peso= :peso WHERE RG= :rg";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
            die("Erro, log do row count");
            exit;
        } else {
            echo "Atualizado";
            exit;
        }
        echo "<pre>";
        print_r($query);
        echo "</pre>";
        exit;
    } catch (PDOException $e) {
        die("Erro: " . $e->getMessage());
    }
} else {
    die("Não tem POST");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>ACADEMIA | Atualização de Conta</title>

    <link rel="stylesheet" type="text/css" href="../views/styles/form.css" />
    <link rel="stylesheet" href="../views/styles/homepage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../views/assets/logo_domain-removebg-preview.png">
    <script src="https://kit.fontawesome.com/a9f11940bf.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>


    <div class="container_section">
        <nav class="navbar_main">
            <div class="pic_brand"></div>
            <span class="logo"></span>
            <ul>
                <li><a href="../views/pages/index.php">Home</a></li>
                <li><a href="#">Espaço do Cliente</a></li>
                <li><a href="../views/pages/form.php">Junte-se a nós</a></li>
                <li><a href="#">Agendamento</a></li>
                <li><a href="../views/pages/planos.html">Planos</a></li>
            </ul>
        </nav>

        <fieldset>

            <form class="form" action="" id="form" method="POST">
                <div class="dados_formulario">

                    <div class="dados_pessoais">
                        <h1>Dados pessoais</h1>

                        <div class="form-control">
                            <label for="nome">Nome completo</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu nome">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="email">Digite seu email</label>
                            <input type="text" name="email" id="email" placeholder="Digite seu email">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="tel_fixo">Digite seu número fixo</label>
                            <input type="text" name="tel_fixo" id="tel_fixo" placeholder="(21) 9999-9999">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="telefone">Digite seu número celular</label>
                            <input type="text" name="celular" id="telefone" placeholder="(21) 99999-9999">


                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="altura">Altura</label>
                            <input type="text" id="altura" name="altura" placeholder=" Informe sua altura em metros" min="0">


                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="peso">Peso</label>
                            <input type="text" id="peso" name="peso" placeholder="Informe seu peso em Kg" min="0">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="data">Data de registro</label>
                            <input type="date" name="data" id="data" placeholder="Data de registro">

                            <small>Error message</small>
                        </div>

                    </div>

                    <!-- Dados residenciais-->

                    <div class="container_segPosicao">
                        <h1>Endereço residencial</h1>

                        <div class="form-control">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" name="logradouro" id="logradouro" placeholder="Informe o tipo do logradouro">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="cep">CEP</label>
                            <input type="text" name="cep" id="cep" placeholder="99999-999">

                            <small>Error message</small>
                        </div>


                        <div class="form-control">
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" id="rua" placeholder="Informe o nome da rua">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="numero">Número da residência</label>
                            <input type="text" name="numeroRua" id="numero" placeholder="Informe o número da residência">


                            <small>Error message</small>

                        </div>

                        <div class="form-control">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento" placeholder="Informe o complemento">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro" placeholder="Informe o bairro">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade" placeholder="Informe a cidade">

                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" id="estado" placeholder="Informe o estado">

                            <small>Error message</small>
                        </div>

                    </div>


                </div>
                <div class="buttons">
                    <input type="reset">
                    <input type="submit" value="Atualizar">
                </div>

            </form>
        </fieldset>

        <br><br>
        <br><br>
        <br><br>


        <footer>
            <div class="cadastro_ref">
                <h5>Clique no link e faça parte do time:</h5>
                <a href="../views/pages/form.php">Cadastre-se</a>
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
    </div>

    <br>

</body>

</html>