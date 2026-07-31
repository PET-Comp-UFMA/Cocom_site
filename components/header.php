<link rel="stylesheet" href="css/header.css">
<header>
    <div class="header-left">
        <a href="index.php" class="header-logo-link">
            <div class="cocom-logo">
                <img src="assets/logo_cocom.svg" alt="logo_cocom">
            </div>
            <div class="header-title">Coordenação | UFMA<br>Ciência da Computação</div>
        </a>
    </div>
    <nav class="header-nav">
        <a class="nav-item" href="index.php">Início</a>
        <a class="nav-item" href="https://sigaa.ufma.br/sigaa/public/curso/curriculo_curso.jsf?lc=pt_BR&lc=pt_BR&id=85766" target="_blank">
            Currículo
        </a>
        <a class="nav-item" href="noticias.php">Notícias</a>
        <a class="nav-item" href="documentos.php">Documentos</a>
        <a class="nav-item" href="historico.php">Histórico do Curso</a>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const currentPath = window.location.pathname.split('/').pop() || 'index.php';
        const navItems = document.querySelectorAll('.nav-item');

        navItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href === currentPath) {
                item.classList.add('active');
            }
        });
    });
</script>