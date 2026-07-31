<!doctype html>
<html lang="pt-BR">
    <?php
        $cssFiles = ['css/documentos.css'];
        $title = "Documentos";
        include "includes/head.php";
        include "includes/functions.php";
        $grupos = lerJson("arquivos.json");
    ?>
  <body>
    <!--HEADER-->
    <?php include "components/header.php" ?>
    <!--FIM DO HEADER-->
    <main class="documentos">
        <div class="documentos_cabecalho">
            <h1 class="documentos_titulo">Documentos</h1>
            <p class="documentos_descricao">Acesso rápido aos documentos oficiais, atas e regulamentos do curso.</p>
        </div>
        <div>
            <?php foreach ($grupos as $grupo): ?>

                <?php include "components/grupo_arquivos.php"; ?>

            <?php endforeach; ?>
        </div>
    </main>
    
    

    <!--FOOTER-->
        <?php include "components/footer.php" ?>
    <!--FIM DO FOOTER-->

    <?php include "includes/scripts.php" ?>
  </body>

</html>