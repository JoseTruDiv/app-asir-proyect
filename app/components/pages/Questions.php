<?php
    if (isset($_SESSION['idRol'])) {
?>
<?php
    include $GLOBALS['path']->HEADER;
?>

<div class="contain px-5 py-2 px-mobile-2">
    <?php include $GLOBALS['path']->WIDGETS.'/breadcrumbs/BreadHome.php';   ?>
    <h3 class="mb-3">Preguntas frecuentes:</h3>
    <div class="scroll-mobile">
    <?php include $GLOBALS['path']->WIDGETS.'/acordions/FQ_acordions.php'; ?>
    <?php include $GLOBALS['path']->WIDGETS.'/questions/texts.php'; ?>
    <?php acordionQuestion(0,'¿Que es salesmaster?',$text01); ?>
    <?php acordionQuestion(1,'Procesos de instalación de sales master:',$text02); ?>
    <?php acordionQuestion(2,'¿Qué se puede hacer desde la app?',$text03); ?>
    <?php acordionQuestion(3,'¿Como se registran los usuarios?',$text04); ?>
    <?php acordionQuestion(4,'¿Como se gestionan las contraseñas olvidadas?',$text05); ?>
    </div>
</div>

<?php include $GLOBALS['path']->HEADERMOBILE;   ?>


<?php
    }else{
        header('Location: /404');
    }
?>