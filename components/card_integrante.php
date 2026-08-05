<div class="card">

    <img src="<?= $integrante["imagem"] ?>" alt="<?= $integrante["nome"] ?>">

    <h3><?= $integrante["nome"] ?></h3>

    <p><?= $integrante["cargo"] ?></p>

    <button
        class="btn-contato"
        data-email="<?= $integrante["email"] ?>">
        CONTATO
    </button>

</div>