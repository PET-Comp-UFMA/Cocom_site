<?php 
    // 1. DADOS E CONFIGURAÇÕES DA PÁGINA (Sempre no topo)
    $title = "Notícias - COCOM";
    $cssFiles = ['css/style.css']; // Ajuste se o nome do seu CSS for diferente

    // Array com as notícias
    $noticias = [
        [
            'titulo' => 'Código das disciplinas',
            'imagem' => 'assets/logo.png',
            'data' => '04/11/2026',
            'conteudo' => '<p>Os códigos das disciplinas podem ser obtidos no SIGAA.</p><p>Ensino, Consultar Estrutura Curricular.</p>',
            'link' => ''
        ],
        [
            'titulo' => 'Não usar para solicitações a COCOM',
            'imagem' => 'assets/logo.png',
            'data' => '08/11/2026',
            'conteudo' => '<p>Favor não usar este site para solicitações a Coordenadoria.</p><p>Este é um site apenas informativo.</p><p>Para solicitações a Coordenadoria usar exclusivamente o email: <strong>cocom@ufma.br</strong></p><p>Grato pela atenção.</p>',
            'link' => ''
        ],
        [
            'titulo' => 'Novo Site',
            'imagem' => 'assets/logo.png',
            'data' => '04/11/2026',
            'conteudo' => '<p>Sejam bem vindos ao novo site da Coordenação de Ciência da Computação da UFMA.</p><p>Este é resultado de um trabalho de alunos da disciplina de Lab. de Eng. de Software em prol da comunidade do curso.</p><p>Através deste site, a COCOM avisará sobre estágio, eventos, oferta de disciplinas...</p><p>Em breve, também estarão disponíveis novas funcionalidades. Aguarde.</p><br><p>Coordenação</p>',
            'link' => ''
        ]
    ];
?>
<!doctype html>
<html lang="pt-BR">
  <?php require_once("includes/head.php"); ?>
  <body>
    <!--HEADER-->
    <?php require_once("includes/header.php"); ?>
    <!--FIM DO HEADER-->

    <!-- CABEÇALHO DA PÁGINA -->
    <div class="container w-75 mt-5">
        <h2 class="fw-bold">Notícias</h2>
        <p class="text-muted">Fique por dentro das últimas atualizações e comunicados da COCOM.</p>
    </div>

    <!--NOTÍCIAS-->
    <div id="noticias">
        <div class="container w-75 py-3">
            <div class="d-flex p-2 justify-content-center mb-4"> 
                <h3 class="text-decoration-underline fw-bold">Notícias</h3>
            </div>

            <!-- LOOP QUE GERA OS CARDS -->
            <?php
                foreach ($noticias as $noticia) {
                    include "components/card_noticia.php";
                }
            ?>
            <!-- FIM DO LOOP -->

        </div>
    </div>
    <!--FIM DAS NOTÍCIAS-->

    <!--FOOTER-->
    <?php require_once("includes/footer.php"); ?>
    <!--FIM DO FOOTER-->

    <?php require_once("includes/scripts.php"); ?>
  </body>
</html>