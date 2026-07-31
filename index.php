<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COCOM</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!--HEADER-->
    <?php require_once("components/header.php"); ?>
    <!--FIM DO HEADER-->
    <!-- Banner -->

    <section class="banner" >
        <div class="banner-texto">
            <div class="texto">
                <p class="titulo-menor">
                    SEJA
                </p>
                <h1>
                    BEM-VINDO!
                </h1>
            </div>

            <button type="button" id="btn-sobre">
                SOBRE A COCOM
            </button>
        </div>

        <div class="banner-imagem">
            <img src="assets/logo-cocom.svg" alt="Logo COCOM">
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
                <button>CONTATO</button>
            </div>

            <div class="card">
                <img src="assets/Prof.Thiago.png">
                <h3>Prof. Dr. Thiago Bonini</h3>
                <p>Coordenador ABI - IA</p>
                <button>CONTATO</button>
            </div>

            <div class="card">
                <img src="assets/Prof.Francisco.png">
                <h3>Prof. Dr. Francisco Glaubos</h3>
                <p>Coordenador ABI - Núcleo Comum</p>
                <button>CONTATO</button>
            </div>

            <div class="card">
                <img src="assets/Leidiane.png">
                <h3>Leidiane Melo</h3>
                <p>Administração</p>
                <button>CONTATO</button>
            </div>

        </div>
    </section>
  
    <!--FOOTER-->
    <?php require_once("components/footer.php"); ?>
    <!--FIM DO FOOTER-->
  
    <script src="js/index.js"></script>

</body>
</html>
