<?php
    if ($_SESSION['idRol']==1) {
?>
<?php
    include $GLOBALS['path']->HEADER;
?>

<div class="conatiner px-5 py-1">
    <?php include $GLOBALS['path']->WIDGETS.'/breadcrumbs/BreadHome.php';   ?>
    <?php include $GLOBALS['path']->WIDGETS.'/navigations/Tab_Config.php';   ?>
</div>


<?php
    }else{
        header('Location: /404');
    }
?>

