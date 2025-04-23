<?php
    if (isset($_SESSION['idRol'])) {
?>
<?php
    include $GLOBALS['path']->HEADER;
?>

<h1>Estas en pag de preguntas</h1>


<?php
    }else{
        header('Location: /404');
    }
?>