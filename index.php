<!doctype html>
<html lang="pt-BR">
<?php
$cssFiles = ['css/card_integrante.css'];
$title = "COCOM";
include "includes/head.php";
?>

<body>
    <!--HEADER-->
    <?php require_once("components/header.php"); ?>
    <!--FIM DO HEADER-->

    <!--CARROSSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <h1>bem-vindo!</h1>
                <a href="#sobre" class="btn button-outline btn-outline-primary button">Sobre a Cocom</a>
            </div>
        </div>
    </div>
    <!--FIM DO CARROSSEL-->

    <!--SOBRE-->
    <div id="sobre">
        <div class="container-fluid py-5 w-75">
            <div class="col-ms-12 text-center">
                <h1>Sobre a COCOM</h1>
                <p>A Coordenação de Ciência da Computação da UFMA é responsável por mudanças no curso, no comportamento dos docentes e dos colaboradores. Suas atividades envolvem funções políticas, gerenciais, acadêmicas e institucionais. Para conhecer o histórico do curso, <a href="historico_curso.php" style="text-decoration: none" class="link-historico">clique aqui</a>.</p>
            </div>
        </div>
    </div>
    <!--FIM DO SOBRE-->

    <!--INTEGRANTES-->
    <div class="integrante">
        <div class="titulo">
            <h1>INTEGRANTES</h1>
        </div>
        <div class="integrantes-container">
            <?php
            require "includes/functions.php";
            $integrantes = lerJson("coordenadores.json");
            foreach ($integrantes as $integrante) {
                include "components/card_integrante.php";
            }
            ?>
        </div>
    </div>
    <!--FIM DOS INTEGRANTES-->

    <!--FOOTER-->
    <?php require_once("components/footer.php"); ?>
    <!--FIM DO FOOTER-->

    <?php include "includes/scripts.php" ?>
</body>

</html>