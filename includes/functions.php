<?php

function lerJson(string $arquivo): array
{
    $caminho = __DIR__ . "/../data/" . $arquivo;

    if (!file_exists($caminho)) {
        return [];
    }

    $conteudo = file_get_contents($caminho);

    $dados = json_decode($conteudo, true);

    return is_array($dados) ? $dados : [];
}