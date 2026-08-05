<div class="documentos_item">

    <span class="documentos_item-titulo">

        <?= $documento["titulo"] ?>

    </span>

    <a
        href="<?= $documento["arquivo"] ?>"
        download
        class="documentos__download">

         <img
            src="assets/download.png"
            alt="Download"
            class="documentos__download-icon">

        <span>Download</span>

    </a>

</div>