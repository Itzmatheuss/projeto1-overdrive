<?php

require_once('../controllers/autenticacao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Empresa</title>
    <link rel="shortcut icon" href="../views/ecology.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/newUserstyle.css">
    <script src="../bootstrap/js/jquery-3.7.1.min.js"></script>
    <script src="../bootstrap/js/jquery.mask.min.js"></script>
    <script src="../bootstrap/js/mask.js"></script>
</head>
<body>
    <div class="img"></div>
    <div class="container">
        <header>Cadastro de Empresa</header>

        <form action="#">
            <div class="form-first">
                <div class="details personal">
                    <span class="title">Detalhes da Empresa</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="nome">Nome da Empresa</label>
                            <input type="text" placeholder="Nome" id="nome" required>
                        </div>

                        <div class="input-field">
                            <label for="nome_fantasia">Nome Fantasia</label>
                            <input type="text" placeholder="Nome Fantasia" id="nome_fantasia" required>
                        </div>

                        <div class="input-field">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" placeholder="CNPJ" id="cnpj" required>
                        </div>

                        <div class="input-field">
                            <label for="endereco">Endereço</label>
                            <input type="text" placeholder="Endereço" id="endereco" required>
                        </div>

                        <div class="input-field">
                            <label for="telefone">Telefone</label>
                            <input type="tel" placeholder="Telefone" id="telefone" required>
                        </div>

                        <div class="input-field">
                            <label for="responsavel">Responsável</label>
                            <input type="text" placeholder="Responsável" id="responsavel" required>
                        </div>
                    </div>
                    
                        <div class="button">
                                <a href="../views/adminEmpr.view.php" class="btn-back">Voltar</a>
                            <button class="btn-send" type="submit">
                                <span class="btnText">Enviar</span>
                            </button>
                        </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>