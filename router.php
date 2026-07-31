<?php

$root = trim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

?>

<base href="<?= $root ? "/{$root}/" : "/" ?>">

<?php

$routes = [

    ($root ? $root : "") => function () {
        require 'index.php';
    },

    ($root ? "$root/noticias" : "noticias") => function () {
        require 'noticias.php';
    },

    ($root ? "$root/historico" : "historico") => function () {
        require 'historico.php';
    },

    ($root ? "$root/documentos" : "documentos") => function () {
        require 'documentos.php';
    },

];

function route($path, $routes)
{
    foreach ($routes as $pattern => $handler) {

        if (preg_match("#^{$pattern}/?$#", $path, $matches)) {

            // Remove o match completo
            array_shift($matches);

            // Executa a função da rota
            call_user_func_array($handler, $matches);

            exit;
        }
    }

    http_response_code(404);
    require 'pages/404.php';
    exit;
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');

route($path, $routes);

?>