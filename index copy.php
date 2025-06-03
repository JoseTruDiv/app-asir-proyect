<?php

session_start();

require __DIR__.'/src/routes/path.php';
require __DIR__.'/src/routes/routes.php';
require __DIR__.'/app/data/Apps.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./app/css/style.css">
    <script src="./app/js/ind.js"></script>
    <script defer src="./app/js/HTML.js"></script>
    <script src="./app/js/rules/formReg.js"></script>
</head>
<body class="fondo">
    <?php
        if (isset($rutas[$_SERVER['REQUEST_URI']])) {
            include $rutas[$_SERVER['REQUEST_URI']];
        }
     ?>
</body>
</html>