<?php

$title = "COCOM";

$cssFiles = [
    "css/index.css"
];
require_once "includes/functions.php";
require "includes/head.php";

$integrantes = lerJson("coordenadores.json");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <!--HEADER-->
    
    <?php require_once("components/header.php"); ?>
    <!--FIM DO HEADER-->
    <!-- Banner -->

    <section class="banner" >
        <div class="banner-texto">
                <div class="texto">
                    <p class="titulo-menor">SEJA</p>
                    <h1>BEM-VINDO!</h1>
                </div>

                <button type="button" id="btn-sobre">
                    SOBRE A COCOM
                </button>
        </div>
    </section>

    <!-- Sobre -->

    <section class="sobre" id="sobre">
        <h2>Sobre a COCOM</h2>

        <p>
            A Coordenação de Ciência da Computação da UFMA é responsável por mudanças no curso,
            no comportamento dos docentes e dos colaboradores. Suas atividades envolvem funções
            políticas, gerenciais, acadêmicas e institucionais. Para conhecer o histórico do curso,
            clique aqui.
        </p>
    </section>

    <section class="integrantes">
        <h2>INTEGRANTES</h2>
        <div class="cards">
            
            <?php
                foreach ($integrantes as $integrante) {
                    include "components/card_integrante.php";
                }
            ?>
        </div>
    </section>
  
    <!--FOOTER-->
    <?php require_once("components/footer.php"); ?>
    <!--FIM DO FOOTER-->
  
    
    <div id="toast-email" class="toast-email">
    E-mail copiado!
    </div>

   
    
    <script src="js/index.js"></script>
</body>
</html>
