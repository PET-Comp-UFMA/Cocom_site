<section class="grupo-documentos">

    <div class="grupo_documentos_header">

        <h3><?= $grupo["titulo"] ?></h3>

        <span>DOWNLOAD</span>

    </div>

    <?php foreach ($grupo["documentos"] as $documento): ?>

        <?php include "components/item_documento.php"; ?>

    <?php endforeach; ?>

</section>