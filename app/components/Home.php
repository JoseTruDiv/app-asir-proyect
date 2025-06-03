<?php

    if (isset($_SESSION['idRol'])) {
        # code...

?>


<div class="container d-none-mobile" style="flex-direction: column;">

    <?php
        include $GLOBALS['path']->HEADER;
    ?>

    <div class="row-column align-center">
        <div class="row-column g-2 div-grid-apps">
            <h2>APPS</h2>
            <div class="d-grid grid-5-5 g-3 h-30 grid-3-5-md grid-3-5-lg">
                <?php

                    $idRol = $_SESSION['idRol'];

                    $path = $GLOBALS['path'];

                    require_once $path->CONTROLLERS.'/GetAppsController.php';

                    $AppsController = new GetAppsController();

                    $array_apps = $AppsController->getApps($idRol);

                    foreach ($array_apps as $value) {
                
                ?>
                <a id="<?php echo $value->name;  ?>" style="text-decoration: none;" href="<?php echo $value->url ?>"><div class="box-home-app g-1"><img height="50" src="<?php echo $value->img; ?>" alt=""><span class="text"><?php echo $value->name ?></span></div></a>

                <?php

                                        
                    }
                                    

                ?>
            </div>
        </div>
    </div>
    

    






</div>

<?php
    include $GLOBALS['path']->WIDGETS.'/alerts/sshAlert.php';
?>


<?php
    include $GLOBALS['path']->HOMEMOBILE;
?>

<?php

}else{
    header('Location: /');
} 

?>