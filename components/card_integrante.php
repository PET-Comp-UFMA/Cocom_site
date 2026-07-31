<div class="card-integrante">
    <img
        class="card-integrante-imagem"
        src="<?= htmlspecialchars($integrante['imagem']) ?>"
        alt="<?= htmlspecialchars($integrante['nome']) ?>">

    <div class="card-integrante-corpo">

        <h5 class="card-integrante-nome">
            <?= htmlspecialchars($integrante['nome']) ?>
        </h5>

        <p class="card-integrante-cargo">
            <?= htmlspecialchars($integrante['cargo']) ?>
        </p>

        <?php if (!empty($integrante['link'])): ?>
            <a
                href="<?= htmlspecialchars($integrante['link']) ?>"
                class="card-integrante-botao"
                target="_blank">
                Visitar
            </a>
        <?php endif; ?>
    </div>
</div>