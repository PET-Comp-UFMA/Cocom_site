<div class="card-noticia row mt-4 mb-4">
    <!-- Título -->
    <div class="col-sm-12 px-3 py-2">
        <h5 class="card-noticia-titulo mb-3 fw-bold">
            <?= htmlspecialchars($noticia['titulo']) ?>
        </h5>
    </div>

    <!-- Imagem e Data -->
    <div class="col-sm-3 text-center">
        <img 
            class="card-noticia-imagem rounded-circle img-fluid shadow-sm" 
            src="<?= htmlspecialchars($noticia['imagem']) ?>" 
            alt="<?= htmlspecialchars($noticia['titulo']) ?>"
            style="width: 160px; height: 160px; object-fit: cover;">
        
        <h6 class="card-noticia-data mt-3 text-muted">
            Postado em <?= htmlspecialchars($noticia['data']) ?>
        </h6>
    </div>

    <!-- Corpo da Notícia (Texto e Botão) -->
    <div class="card-noticia-corpo col-sm-9 py-3">
        
        <div class="card-noticia-conteudo">
            <?= $noticia['conteudo'] ?>
        </div>

        <?php if (!empty($noticia['link'])): ?>
            <a 
                href="<?= htmlspecialchars($noticia['link']) ?>" 
                class="card-noticia-botao btn btn-outline-primary mt-2" 
                target="_blank">
                Ler mais
            </a>
        <?php endif; ?>
    </div>
</div>
<hr class="text-secondary opacity-25">