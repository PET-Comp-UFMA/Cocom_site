<?php

$title = "COCOM";

$cssFiles = [
    "css/index.css"
];

require "includes/head.php";

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

            <div class="card">
                <img src="assets/Prof.Darlan.png">
                <h3>Prof. Dr. Darlan Bruno Pontes Quintanilha</h3>
                <p>Coordenador</p>
                <a class="btn-contato" href="https://mail.google.com/mail/u/1/#inbox/FMfcgzQhVhdwnDWqDHsbcZjcWDdjWztB?compose=DmwnWsTRSzxqzlktqVMqrHqplXTTDsQdMlqJBMJgRsHRPlTHKXmtNpWGKMpCRkkPwcGfdRKNGskQ" target="_blank" >
                    CONTATO
                </a>
            </div>

            <div class="card">
                <img src="assets/Prof.Thiago.png">
                <h3>Prof. Dr. Tiago Bonini</h3>
                <p>Coordenador ABI - IA</p>
                <a class="btn-contato" href="mailto:tiago.bonini@ufma.br">
                    CONTATO
                </a>
            </div>

            <div class="card">
                <img src="assets/Prof.Francisco.png">
                <h3>Prof. Dr. Francisco Glaubos</h3>
                <p>Coordenador ABI - Núcleo Comum</p>
                <a class="btn-contato" href="mailto:francisco.glaubos@ufma.br">
                    CONTATO
                </a>
            </div>

            <div class="card">
                <img src="assets/Leidiane.png">
                <h3>Leidiane Melo</h3>
                <p>Administração</p>
                    <a href="mailto:felipeyanbp@gmail.com" class="btn-contato" >
                        CONTATO
                    </a>
            </div>

        </div>
    </section>
  
    <!--FOOTER-->
    <?php require_once("components/footer.php"); ?>
    <!--FIM DO FOOTER-->
  
    <script src="js/index.js"></script>

</body>
</html>
