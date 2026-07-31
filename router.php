<?php $root = trim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
?>
<base href="<?= $root ? "/$root/" : '/' ?>">

<?php

$param = "[/]?(\w*)";

$routes = [

    ($root ? "$root" : "") => function () {
        require 'index.php';
    },

    ($root ? "$root/noticias" : "noticias") => function () {
        require 'noticias.php';
    },

    ($root ? "$root/historico_curso" : "historico") => function () {
        require 'historico_curso.php';
    },

    ($root ? "$root/documentos" : "documentos") => function () {
        require 'documentos.php';
    },

];

function route($path, $routes)
{
    foreach ($routes as $pattern => $handler) {

        if (preg_match("#^$pattern/?$#", $path, $matches)) {
            // Remove o primeiro elemento (match completo)
            array_shift($matches);

            // Chama o handler com os parâmetros capturados
            call_user_func_array($handler, $matches);
            exit; // Importante para não continuar processando
        }
    }

    http_response_code(404);
    require 'pages/404.php';
    exit;
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = ltrim($path, '/');

route($path, $routes);
?>