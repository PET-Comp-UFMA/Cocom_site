<!doctype html>
<html lang="pt-BR">
  <?php require_once("head.html") ?>
  <body>
    <!--HEADER-->
    <?php require_once("menu-dropdown.html"); ?>
    <!--FIM DO HEADER-->

    <!--CARROSSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <!--<div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <b'utton type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>-->
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <h1>bem-vindo!</h1>
                <a href="#sobre" class="btn button-outline btn-outline-primary button">Sobre a Cocom</a>
            </div>
            <!--<div class="carousel-item text-center">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nulla ut viverra placerat. Vestibulum luctus cursus eros ac egestas.
                </p>
            </div>
            <div class="carousel-item text-center">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nulla ut viverra placerat. Vestibulum luctus cursus eros ac egestas.
                </p>
            </div>-->
        </div>
        <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>-->
    </div>
    <!--FIM DO CARROSSEL-->

    <!--SOBRE-->
    <div id="sobre">
        <div class="container-fluid py-5 w-75">
            <div class="col-ms-12 text-center">
                <h1>Sobre a COCOM</h1>
                <p>A Coordenação de Ciência da Computação da UFMA é responsável por mudanças no curso, no comportamento dos docentes e dos colaboradores. Suas atividades envolvem funções políticas, gerenciais, acadêmicas e institucionais. Para conhecer o histórico do curso, <a href="historico_curso.php" style="text-decoration: none" class="link-historico">clique aqui</a></p>
            </div>
        </div>
    </div>
    <!--FIM DO SOBRE-->

    <!--INTEGRANTES-->
    <div id="integrantes">
        <div class="container mt-3 py-3">
            <div class="row">
                <div class="text-center mb-3">
                    <h1>INTEGRANTES</h1>
                </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/integrantes/simara.jpg" alt="Imagem da professora simara">
                        <div class="card-body text-center">
                            <h5 class="card-title">Profa. Dra. Simara V. da Rocha</h5>
                            <p class="card-text">Coordenadora</p>
                            <a href="http://deinf.ufma.br/~simara/" class="btn button-primary btn-outline-primary button">Visitar</a>
                        </div>
                    </div>    
            </div>
        </div>
    </div>
    <!--FIM DOS INTEGRANTES-->

    <!--FOOTER-->
    <?php require_once("footer.html"); ?>
    <!--FIM DO FOOTER-->

    <?php require_once("scripts.html"); ?>
  </body>
</html>