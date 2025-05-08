<?php

    if (isset($_SESSION['idRol'])) {
        # code...
?>


<div class="d-none d-block-mobile">
   

    <div class="row-column align-center">
        <div class="row-column g-1 div-grid-apps">
            <h2>APPS</h2>
            <div class="d-grid grid-1-10 g-2" style="overflow-y: scroll;height: 50vh;scrollbar-width: none;">
                <?php

                    $idRol = $_SESSION['idRol'];

                    $path = $GLOBALS['path'];

                    require_once $path->CONTROLLERS.'/GetAppsController.php';

                    $AppsController = new GetAppsController();

                    $array_apps = $AppsController->getApps($idRol);

                    foreach ($array_apps as $value) {
                
                        if ($value->name !== 'SSH') {
                        
                ?>
                <a id="<?php echo $value->name;  ?>" style="text-decoration: none;" href="<?php echo $value->url ?>"><div class="box-home-app g-1"><img height="50" src="<?php echo $value->img; ?>" alt=""><span class="text"><?php echo $value->name ?></span></div></a>

                <?php
                           
                        }
                                        
                    }
                                    

                ?>
            </div>
        </div>
    </div>

    <div class="row-column pt-1 align-center">
        <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-chevron-compact-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894z"/>
        </svg>
        <h3>Realiza scroll con el dedo</h3>
    </div>

    <?php include $GLOBALS['path']->HEADERMOBILE;   ?>
    

</div>



<div class="div-alert-ssh d-flex justify-center align-center d-none">
    <div class="alert-ssh row-column flex-column px-1 g-1">
        <div class="d-flex justify-end pt-1">
            <a id="closed-ssh" class="a-session" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                </svg>
            </a>
        </div>
        <div class="pl-2">
            <p class="text mb-1">Server ssh</p>
            <div class="clickboard-ssh">
                <input type="text" name="ssh" id="ssh-server" value="ssh remote_username@remote_host">
            </div>
        </div>
        <div class="pl-2">
            <p class="text mb-1">Cliente ssh</p>
            <div class="clickboard-ssh">
                <input type="text" name="ssh" id="ssh-cliente" value="ssh remote_username@remote_host">
        </div>
        </div>
        
        
    </div>
</div>

<?php

}else{
    header('Location: /');
} 

?>