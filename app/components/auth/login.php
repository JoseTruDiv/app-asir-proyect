
    <div class="container align-center justify-center">
        <div class="box-auth" id="boxAuth">
            <form action="/loginController" method="post">
                <div class="row justify-center">
                    <img class="logo-auth" src="./app/imgs/logo-corporativo.svg" alt="logo_financial">
                </div>
                <input type="hidden" name="funcion" value="setUser">
                <div class="row justify-center mt-1">
                    <p class="text">Login</p>
                </div>
                <div class="row justify-center mt-1">
                    <input class="input text" type="email" name="nameLogin" id="nameLogin" placeholder="Email de usuario...">
                </div>
                <?php 

                

                    $path = $GLOBALS['path'];

                    require_once $path->CONTROLLERS.'/GetCuentaController.php';

                    $getCuentaController = new GetCuentaController();
                    

                    if ($getCuentaController->index() === 0) {
                       
                
                ?>
                <div class="row justify-center mt-1">
                    <p class="text">¿No tienes cuenta?, <a class="a" href="/registro">Crea una</a></p>
                </div>

                <?php
                     # code...
                    }else{

                    }
                ?>

                <div class="row justify-center mt-2">
                    <button class="btn-auth text px-3 py-1">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        if (isset($_SESSION['registroUser'])) {
            include $path->COMPONENTS.'/widgets/alerts/altaAlert.php'; 
            unset($_SESSION['registroUser']);
        }

        if (isset($_SESSION['inicio'])) {
            include $path->COMPONENTS.'/widgets/alerts/errorLogin.php'; 
            unset($_SESSION['inicio']);
        }
     ?>