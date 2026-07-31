<article class="noticia-card">

    <h4 class="noticia-card__titulo">
        <?= $noticia["titulo"] ?>
    </h4>

    <div class="noticia-card__conteudo">

        <div class="noticia-card__imagem">
            <img src="<?= $noticia["imagem"] ?>" alt="<?= $noticia["titulo"] ?>">
            <p class="noticia-card__data">
                Postado em <?= $noticia["data"] ?>
            </p>
        </div>

        <div class="noticia-card__texto">
            <?= $noticia["conteudo"] ?>
        </div>

    </div>

    

</article>