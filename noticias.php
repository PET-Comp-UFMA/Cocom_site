<?php

$title = "Notícias";

$cssFiles = [
    "css/noticias.css",
    "css/card_noticia.css"
];

require_once "includes/functions.php";

$noticias = lerJson("noticias.json");

require "includes/head.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<body>

    <!-- HEADER -->
    <?php require_once "components/header.php"; ?>

    <main class="noticias">

        <!-- CABEÇALHO -->
        <section class="noticias__cabecalho">

            <h1 class="noticias__titulo">
                Notícias
            </h1>

            <p class="noticias__descricao">
                Fique por dentro das últimas atualizações e comunicados da COCOM.
            </p>

        </section>

        <!-- LISTA DE NOTÍCIAS -->
        <section class="noticias__lista">

            <div>
                <h2 class="noticias__subtitulo">Notícias</h2>
            </div>

            <?php foreach ($noticias as $noticia): ?>

                <?php include "components/card_noticia.php"; ?>

            <?php endforeach; ?>

        </section>

    </main>

    <!-- FOOTER -->
    <?php require_once "components/footer.php"; ?>

    <?php require_once "includes/scripts.php"; ?>

</body>

</html>