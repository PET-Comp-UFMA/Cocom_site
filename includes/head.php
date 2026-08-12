<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($title) ? $title : "COCOM"; ?></title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon-v1/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-v1/logo-cocom.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-v1/logo-cocom.ico">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/assistenteIA.css">
    
    <?php include "components/assistente_cocom.php" ?>
    


    <?php
      if (isset($cssFiles) && is_array($cssFiles)) {
            foreach ($cssFiles as $cssFile) {
                echo '<link rel="stylesheet" href="' . $cssFile . '">';
            }
        }
    ?>
    <script src="js/header.js" defer></script>
</head>