<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOMOBILISTA PARK</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- HEADER -->
    <header>

        <div class="logo">
            <a href="#">
                <img src="img/logo.png" alt="AUTOMOBILISTA PARK">
            </a>
        </div>

        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>

    </header>

    <!-- BANNER -->
    <section class="banner">
        <img src="img/banner.jpg" alt="Banner Principal">
    </section>

    <!-- SOBRE -->
    <section class="sobre">
        <h2>Sobre a AUTOMOBILISTA PARK</h2>

        <p>
            A AUTOMOBILISTA PARK é uma loja virtual especializada em produtos
            pessoais e profissionais para automobilismo.
        </p>

        <p>
            Nosso objetivo é atender pilotos amadores e profissionais,
            oferecendo equipamentos de qualidade, conforto e segurança.
        </p>
    </section>

    <!-- PRODUTOS -->
    <section class="produtos">

        <h2>Produtos em Destaque</h2>

        <div class="grid-produtos">

            <?php

            $sql = "SELECT * FROM produtos LIMIT 4";
            $resultado = mysqli_query($conexao, $sql);

            if ($resultado && mysqli_num_rows($resultado) > 0) {

                while ($produto = mysqli_fetch_assoc($resultado)) {
            ?>

                    <div class="card">

                        <img src="img/produtos/<?php echo $produto['id_produto']; ?>.jpg" alt="<?php echo $produto['nome_produto']; ?>">

                        <h3>
                            <?php echo $produto['nome_produto']; ?>
                        </h3>

                        <p>
                            <?php echo $produto['descricao_produto']; ?>
                        </p>

                        <span class="preco">
                            R$ <?php echo number_format($produto['preco_produto'], 2, ',', '.'); ?>
                        </span>

                    </div>

            <?php
                }
            } else {
                echo "<p>Nenhum produto cadastrado.</p>";
            }
            ?>

        </div>

    </section>

    <!-- FUTURAS FUNCIONALIDADES -->
    <section class="futuro">

        <h2>Funcionalidades Futuras</h2>

        <div class="futuro-grid">
            <div>Cadastro</div>
            <div>Login</div>
            <div>Carrinho</div>
            <div>Favoritos</div>
            <div>Área RH</div>
            <div>Cashback</div>
            <div>Chatbot IA</div>
            <div>Sugestão de Produtos</div>
        </div>

    </section>

    <!-- RODAPÉ -->
    <footer>
        <p>© 2026 AUTOMOBILISTA PARK</p>
        <p>Produtos para pilotos amadores e profissionais.</p>
    </footer>

</body>

</html>